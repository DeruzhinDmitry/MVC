<?php
namespace App\Model;

use App\Core\Model;

/**
 * Class Index
 * @package App\Model
 */
class Todo extends Model
{
    /**
     * Get data for page
     *
     * @return array
     */
    public function getDataForPage($page)
    {
        $result = [];
        $startElement = Paginator::PAGE_SIZE * ($page - 1);
        $query = mysqli_query(
            $this->dbConnect,
            'SELECT * from todo_items LIMIT ' . $startElement . ', ' . Paginator::PAGE_SIZE
        );

        while ($item = mysqli_fetch_assoc($query)) {
            $result[] = $item;
        }

        return $result;
    }

    /**
     * Get item data by id
     *
     * @return array
     */
    public function getItemDataById($id)
    {
        $query = mysqli_query(
            $this->dbConnect,
            'SELECT * from todo_items WHERE id=' . $id
        );

        while ($item = mysqli_fetch_assoc($query)) {
            return $item;
        }

        return [];
    }

    /**
     * Get page count
     *
     * @param int $count
     * @return int
     */
    public function getPageCount()
    {
        $query = mysqli_query($this->dbConnect, 'SELECT * from todo_items');
        $queryCount = mysqli_num_rows($query);
        $count = intdiv($queryCount, Paginator::PAGE_SIZE);
        $count += $queryCount % Paginator::PAGE_SIZE ? 1 : 0;

        return $count;
    }

    /**
     * Save
     *
     * @return bool
     */
    public function save($itemData)
    {
        if (isset($itemData['email']) && $itemData['email']
            && isset($itemData['name']) && $itemData['name']
            && isset($itemData['text']) && $itemData['text']
            && isset($itemData['status']) && $itemData['status']
        ) {
            isset($itemData['done'])
                ? $itemData['done'] = 1
                : $itemData['done'] = 0;

            if (isset($itemData['id']) && $itemData['id']) {
                $query = mysqli_query(
                    $this->dbConnect,
                    "UPDATE todo_items SET "
                    . "email = '" . $itemData['email']
                    . "', name = '" . $itemData['name']
                    . "', text = '" . $itemData['text']
                    . "', status = '" . $itemData['status']
                    . "', done = '" . $itemData['done']
                    . "' WHERE id=" . $itemData['id']
                );
            } else {
                $query = mysqli_query(
                    $this->dbConnect,
                    "INSERT todo_items (email, name, text, status, done) VALUES ('"
                    . $itemData['email']
                    . "', '" . $itemData['name']
                    . "', '" . $itemData['text']
                    . "', '" . $itemData['status']
                    . "', '" . $itemData['done']
                    . "')"
                );
            }
        } else {
            return false;
        }

        return $query;
    }
}
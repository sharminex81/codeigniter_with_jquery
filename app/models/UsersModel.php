<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

    /**
     * @var
     */
    private static $db;
    /**
     * @var
     */
    private static $session;

    /**
     * @var string
     */
    var $table = 'users';

    /**
     * @var array
     */
    var $order = array('id' => 'desc'); // default order

    /**
     * UsersModel constructor.
     */
    function __construct()
    {
        parent::__construct();
        self::$db = &get_instance()->db;
        self::$session = &get_instance()->session;
    }

    /**
     * @return mixed
     */
    public static function getAll()
    {
        $result = [];

        try {
            $result = self::$db->get('users')->result();
            if ($result) {
                return $result;
            }
        } catch (Exception $exception) {
            throw $exception;
        }

        return false;
    }

    /**
     * @param $postData
     * @return mixed
     */
    public static function store($postData)
    {
        self::$db->insert('users', $postData);
        $id = self::$db->insert_id();
        $q = self::$db->get_where('users', array('id' => $id));
        return $q->row();
    }

    /**
     * @return mixed
     */
    public static function record_count() {
        return self::$db->count_all("users");
    }
}
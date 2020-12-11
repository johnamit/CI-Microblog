<?php 
class Messages_model extends CI_Model{
    public function getMessagesByPoster($name){
        $sql = "SELECT Messages.user_username, Messages.text, cast(Messages.posted_at as time) AS time, Users.email FROM Messages INNER JOIN Users ON Messages.user_username=Users.username WHERE user_username='{$name}' ORDER BY time DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function searchMessages($string){
        $sql = "SELECT Messages.user_username, Messages.text, cast(Messages.posted_at as time) AS time, Users.email FROM Messages INNER JOIN Users ON Messages.user_username=Users.username WHERE Messages.text LIKE '%{$string}%' ORDER BY time DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function insertMessage($poster,$string){
        $sql = "INSERT INTO Messages(user_username, text, posted_at) VALUES ('{$poster}','{$string}',CURRENT_TIMESTAMP())";
        $query = $this->db->query($sql);
    }

    public function getFollowedMessages($name){
        $sql = "SELECT Messages.user_username, Messages.text, cast(Messages.posted_at as time) AS time, Users.email FROM Messages INNER JOIN Users ON Messages.user_username=Users.username INNER JOIN User_Follows ON Messages.user_username = User_Follows.followed_username WHERE follower_username = '{$name}' ORDER BY time DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
<?php
//CLASS Berichten
class Message{
    public $subject;
    public $text;

    function __construct($subject, $text){
        $this->subject = $subject;
        $this->text = $text;
}

   public function subjectext($subject, $limit = 32) {
        if (str_word_count($subject, 0) > $limit) {
            $words = str_word_count($subject, 2);
            $pos   = array_keys($words);
            $subject  = substr($subject, 0, $pos[$limit]) . '...';
        }
        $proper = ucfirst(strtolower($subject));

        return $proper;
    }







}
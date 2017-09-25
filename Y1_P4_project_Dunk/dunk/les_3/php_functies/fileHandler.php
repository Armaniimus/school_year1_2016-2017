<?php

class fileHandler {
    private $url;
    private $content;
    private $mode;
    public  $result;

    public function __construct($url, $content = null) {
        $this->url = $url;
        $this->content = $content;
    }

    public function create() {
        $myfile = fopen($this->url, "w") or die("Unable to open file!");
        fwrite($myfile, $this->content);
        fclose($myfile);

        $this->result = "<textarea name='content' rows='8' cols='40'></textarea>";
        return $this->result;
    }

    private function readPrivate() {
        $myfile = fopen($this->url, "r") or die("Unable to open file!");
        $this->result = fread($myfile,filesize($this->url));
        fclose($myfile);

        return $this->result;
    }

    public function read() {
        $this->readPrivate();

        $this->result = "<textarea name='content' rows='8' cols='40'>$this->result</textarea>";
        return $this->result;
    }

    public function update() {

        if (isset($_POST['ready2update'] ) ) {
            $this->create($this->url, $this->content);

            $this->result = "<textarea name='content' rows='8' cols='40'></textarea>";
            return $this->result;
        } else {
            $y = $this->readPrivate();

            $this->result =
            "Update Data: <br>
            <textarea name='content' rows='6' cols='40'>$y</textarea>
            <input type='hidden' name='url' value='$this->url'>
            <input type='hidden' name='ready2update'>";

            return $this->result;
        }
    }

    public function delete() {
        unlink($this->url);
        $this->result = "<textarea name='content' rows='8' cols='40'></textarea>";
        return $this->result;
    }
}

?>

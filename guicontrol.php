<?php

include "dbcontrol.php";
class guicontrol
{
    protected $username;
    protected $usertype;
    public function __construct($username, $usertype)
    {
        echo "constructing...";
        $this->username = $username;
        $this->usertype = $usertype;
    }

    public function draw_usertable() {
        $dbctl = new dbcontrol();
        $table = $dbctl->selectTable("vartotojai2");
        echo "dbget<br>";
        print_r($table);
        $columns = $table->fetch_fields();
        echo "tablefetch<br>";
        echo "<table>";

        echo "<thead>";
        echo "<tr>";
        foreach ($columns as $column) {
            echo '<th>' . $column->name . '</th>';
        }

        echo "</tr>";
        echo "</thead>";


        echo "<tbody>";

        echo "</tbody>";

        echo "</table>";
    }
}
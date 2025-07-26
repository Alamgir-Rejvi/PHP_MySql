
<?php
class Animal {
    protected $type;

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return "This is $this->type";
    }
}

class Food extends Animal {
    public function getType() {
        return "This is $this->type";
    }
}

$p = new Food();
$p->setType("Animals");
echo $p->getType();
?>

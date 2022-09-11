<?php
class TreeInversion
{
    /**
     * @param BinaryNode $root
     * @return BinaryNode
     */
    public static function invert($root)
    {
        //$BinaryNode = new BinaryNode();

        if (!isset($root)) return $root;

        $tempLeftNode = $root->left;

        $root->left = $root->right;
        $root->right = $tempLeftNode;

        self::invert($root->left);
        self::invert($root->right);

        return  $root;
    }
}
include './BinaryNode.php';

$root = new BinaryNode(1);

$root->left = new BinaryNode(2);
$root->right = new BinaryNode(3);

$root->left->left = new BinaryNode(4);
$root->left->right = new BinaryNode(5);

$root->right->left = new BinaryNode(6);
$root->right->right = new BinaryNode(7);
echo "<pre>";print_r(TreeInversion::invert($root));

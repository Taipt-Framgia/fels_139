<?php
class Category extends AppModel
{
    public $hasMany = ['Lesson', 'Word'];
}

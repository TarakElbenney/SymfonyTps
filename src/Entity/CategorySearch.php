<?php

namespace App\Entity;

use App\Entity\Category;

class CategorySearch
{
    /**
     * @var Category|null
     */
    private $category;

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}

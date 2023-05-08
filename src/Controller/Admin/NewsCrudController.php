<?php

namespace App\Controller\Admin;

use App\Entity\News;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NewsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return News::class;
    }

    public function createEntity(string $entityFqcn): News
    {
        $news = new News();
        $today = new \DateTimeImmutable();
        $news->setCreatedAt($today)
            ->setUpdatedAt($today)
            ->setAuthor("Pierre LICTEVOUT");

        return $news;
    }
}

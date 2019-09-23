<?php

namespace App\Listener;

use App\Entity\Property;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\PreUpdateEventArgs;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ImageCacheSubscriber implements EventSubscriber{

    private $cacheManager;
    private $uploaderHelper;

    public function __construct(CacheManager $cacheManager, UploaderHelper $uploaderHelper)
    {
        $this->cacheManager = $cacheManager;
        $this->uploaderHelper = $uploaderHelper;
    }


    public function getSubscribedEvents(){
        return [
            'preRemove',
            'preUpdate'
        ];
    }

    public function preRemove (LifecycleEventArgs $args){
        $entity = $args->getEntity();
         if(!$entity instanceof Property){
            return ;
        }
        $this->cacheManager->remove($this->uploaderHelper->assert($entity, 'imageFile'));
    }
    public function preUpdate(PreUpdateEventArgs $args){
        $entity = $args->getEntity();
        if(!$entity instanceof Property){
            return ;
        }
        if ($entity->getimageFile() instanceof UploadedFile){
            $this->cacheManager->remove($this->uploaderHelper->assert($entity, 'imageFile'));
        }
    }
}
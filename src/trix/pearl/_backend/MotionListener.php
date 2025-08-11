<?php
declare(strict_types=1);

namespace trix\pearl\_backend;

use pocketmine\entity\projectile\EnderPearl;
use pocketmine\event\entity\ProjectileLaunchEvent;
use pocketmine\event\Listener;
use trix\pearl\Root;

final class MotionListener implements Listener {

    public function listenForProjectileLaunch(ProjectileLaunchEvent $ev): void {
        $entity = $ev->getEntity();

        if ($entity instanceof EnderPearl) {
            $motion = $entity->getMotion();
            $motion->x *= Root::$xMotion;
            $motion->y *= Root::$yMotion;
            $motion->z *= Root::$zMotion;

            $entity->setMotion($motion);
        }
    }
}
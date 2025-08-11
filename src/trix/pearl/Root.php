<?php
declare(strict_types=1);

namespace trix\pearl;

use pocketmine\plugin\PluginBase;
use trix\pearl\_backend\ConfigException;
use trix\pearl\_backend\MotionListener;

final class Root extends PluginBase {

    public static float $xMotion;
    public static float $yMotion;
    public static float $zMotion;

    /**
     * @throws \Exception
     */
    protected function onEnable(): void {
        self::$xMotion = $this->getKeyValue("x");
        self::$yMotion = $this->getKeyValue("y");
        self::$zMotion = $this->getKeyValue("z");

        $this->getServer()->getPluginManager()->registerEvents(new MotionListener(), $this);
    }

    /**
     * @throws \Exception
     * Why is this final and not private you might ask? Because im a loser.
     * This was also coded at 3AM at night, so please don't bully me.
     */
    final public function getKeyValue(string $type): float {
        $value = $this->getConfig()->get("pearl-motion")[$type] ?? null;

        if (!is_float($value)) {
            throw new ConfigException("Invalid axis float provided, value must be a float");
        }

        return $value;
    }
}
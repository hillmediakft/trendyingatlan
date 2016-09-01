<?php
/**
* Register event as an anonymous function
* EventMaganer::on('event_name', function($arg1, $arg2) { echo $arg1; echo $arg2; });
*
* Register event as a class method
* EventManager::on('event_name', [new \G4\Events\Test(), 'test']);
*
* Unregister all subscribers
* EventManager::clear();
*
* Unregister all subscribers based on event name
* EventManager::off('event_name');
*
* Unregister one single subscriber
* EventManager::off('event_name', [new \G4\Events\Test(), 'test']);
*
* Get all events and subscribers
* EventManager::getEvents();
*
* Check if event is registered
* EventManager::has('event_name');
*
* Check if subscriber is registered
* EventManager::has('event_name', [new \G4\Events\Test(), 'test']);
*
* Trigger event with arguments
* EventManager::trigger('event_name', [12345, 987]);
*
* Trigger event without arguments
* EventManager::trigger('event_name');
*/
class Event_manager
{
    /**
     * @var array
     */
    private static $events = [];
    private function __construct() {}
    private function __clone() {}
    /**
     * @return void
     */
    public static function clear()
    {
        self::$events = [];
    }
    /**
     * @return array
     */
    public static function getEvents()
    {
        return self::$events;
    }
    /**
     * @param string $name
     * @param function|array $callback
     * @return bool
     */
    public static function has($name, $callback = null)
    {
        return $callback === null
            ? isset(self::$events[$name])
            : isset(self::$events[$name][self::getKey($callback)]);
    }
    /**
     * @param string $name
     * @param function|array $callback
     * @return void
     */
    public static function off($name, $callback = null)
    {
        if ($callback === null) {
            unset(self::$events[$name]);
        } else {
            unset(self::$events[$name][self::getKey($callback)]);
        }
    }
    /**
     * @param string $name
     * @param function|array $callback
     * @throws \Exception
     * @return void
     */
    public static function on($name, $callback)
    {
        if (!is_callable($callback)) {
            throw new \Exception('Function not callable');
        }
        self::$events[$name][self::getKey($callback)] = $callback;
    }
    /**
     * @param string $name
     * @param array $params
     * @throws \Exception
     * @return void
     */
    public static function trigger($name, array $params = [])
    {
        if (!self::has($name)) {
            throw new \Exception('Event is not registered');
        }
        foreach(self::$events[$name] as $event) {
            call_user_func_array($event, $params);
        }
    }
    /**
     * @param function|array $callback
     * @return string
     */
    private static function getKey($callback)
    {
        return md5(print_r($callback,true));
    }
}
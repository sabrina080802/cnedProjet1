<?php

namespace ContainerVTcyFR5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder25551 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer96005 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1e306 = [
        
    ];

    public function getConnection()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getConnection', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getMetadataFactory', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getExpressionBuilder', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'beginTransaction', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getCache', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getCache();
    }

    public function transactional($func)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'transactional', array('func' => $func), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'wrapInTransaction', array('func' => $func), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'commit', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->commit();
    }

    public function rollback()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'rollback', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getClassMetadata', array('className' => $className), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'createQuery', array('dql' => $dql), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'createNamedQuery', array('name' => $name), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'createQueryBuilder', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'flush', array('entity' => $entity), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'clear', array('entityName' => $entityName), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->clear($entityName);
    }

    public function close()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'close', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->close();
    }

    public function persist($entity)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'persist', array('entity' => $entity), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'remove', array('entity' => $entity), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'detach', array('entity' => $entity), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'merge', array('entity' => $entity), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getRepository', array('entityName' => $entityName), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'contains', array('entity' => $entity), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getEventManager', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getConfiguration', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'isOpen', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getUnitOfWork', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getProxyFactory', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'initializeObject', array('obj' => $obj), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'getFilters', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'isFiltersStateClean', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'hasFilters', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return $this->valueHolder25551->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer96005 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder25551) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder25551 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder25551->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, '__get', ['name' => $name], $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        if (isset(self::$publicProperties1e306[$name])) {
            return $this->valueHolder25551->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25551;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder25551;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25551;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder25551;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, '__isset', array('name' => $name), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25551;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder25551;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, '__unset', array('name' => $name), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25551;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder25551;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, '__clone', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        $this->valueHolder25551 = clone $this->valueHolder25551;
    }

    public function __sleep()
    {
        $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, '__sleep', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;

        return array('valueHolder25551');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer96005 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer96005;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer96005 && ($this->initializer96005->__invoke($valueHolder25551, $this, 'initializeProxy', array(), $this->initializer96005) || 1) && $this->valueHolder25551 = $valueHolder25551;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder25551;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder25551;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

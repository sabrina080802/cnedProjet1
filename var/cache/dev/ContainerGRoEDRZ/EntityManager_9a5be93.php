<?php

namespace ContainerGRoEDRZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercbe36 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb6b12 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesff69e = [
        
    ];

    public function getConnection()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getConnection', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getMetadataFactory', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getExpressionBuilder', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'beginTransaction', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getCache', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'transactional', array('func' => $func), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'commit', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->commit();
    }

    public function rollback()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'rollback', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getClassMetadata', array('className' => $className), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'createQuery', array('dql' => $dql), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'createNamedQuery', array('name' => $name), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'createQueryBuilder', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'flush', array('entity' => $entity), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'clear', array('entityName' => $entityName), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->clear($entityName);
    }

    public function close()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'close', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->close();
    }

    public function persist($entity)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'persist', array('entity' => $entity), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'remove', array('entity' => $entity), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'detach', array('entity' => $entity), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'merge', array('entity' => $entity), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'contains', array('entity' => $entity), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getEventManager', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getConfiguration', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'isOpen', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getUnitOfWork', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getProxyFactory', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'initializeObject', array('obj' => $obj), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'getFilters', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'isFiltersStateClean', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'hasFilters', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return $this->valueHoldercbe36->hasFilters();
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

        $instance->initializerb6b12 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHoldercbe36) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercbe36 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercbe36->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, '__get', ['name' => $name], $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        if (isset(self::$publicPropertiesff69e[$name])) {
            return $this->valueHoldercbe36->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbe36;

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

        $targetObject = $this->valueHoldercbe36;
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
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbe36;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercbe36;
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
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, '__isset', array('name' => $name), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbe36;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercbe36;
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
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, '__unset', array('name' => $name), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbe36;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercbe36;
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
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, '__clone', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        $this->valueHoldercbe36 = clone $this->valueHoldercbe36;
    }

    public function __sleep()
    {
        $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, '__sleep', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;

        return array('valueHoldercbe36');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb6b12 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb6b12;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb6b12 && ($this->initializerb6b12->__invoke($valueHoldercbe36, $this, 'initializeProxy', array(), $this->initializerb6b12) || 1) && $this->valueHoldercbe36 = $valueHoldercbe36;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercbe36;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercbe36;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

<?php

namespace ContainerZkrWen7;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd6bf5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer80a41 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties654cc = [
        
    ];

    public function getConnection()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getConnection', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getMetadataFactory', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getExpressionBuilder', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'beginTransaction', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getCache', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'transactional', array('func' => $func), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'commit', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->commit();
    }

    public function rollback()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'rollback', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getClassMetadata', array('className' => $className), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'createQuery', array('dql' => $dql), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'createNamedQuery', array('name' => $name), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'createQueryBuilder', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'flush', array('entity' => $entity), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'clear', array('entityName' => $entityName), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->clear($entityName);
    }

    public function close()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'close', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->close();
    }

    public function persist($entity)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'persist', array('entity' => $entity), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'remove', array('entity' => $entity), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'detach', array('entity' => $entity), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'merge', array('entity' => $entity), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'contains', array('entity' => $entity), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getEventManager', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getConfiguration', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'isOpen', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getUnitOfWork', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getProxyFactory', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'initializeObject', array('obj' => $obj), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'getFilters', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'isFiltersStateClean', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'hasFilters', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return $this->valueHolderd6bf5->hasFilters();
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

        $instance->initializer80a41 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderd6bf5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd6bf5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd6bf5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, '__get', ['name' => $name], $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        if (isset(self::$publicProperties654cc[$name])) {
            return $this->valueHolderd6bf5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6bf5;

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

        $targetObject = $this->valueHolderd6bf5;
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
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6bf5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd6bf5;
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
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, '__isset', array('name' => $name), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6bf5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd6bf5;
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
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, '__unset', array('name' => $name), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6bf5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd6bf5;
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
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, '__clone', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        $this->valueHolderd6bf5 = clone $this->valueHolderd6bf5;
    }

    public function __sleep()
    {
        $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, '__sleep', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;

        return array('valueHolderd6bf5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer80a41 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer80a41;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer80a41 && ($this->initializer80a41->__invoke($valueHolderd6bf5, $this, 'initializeProxy', array(), $this->initializer80a41) || 1) && $this->valueHolderd6bf5 = $valueHolderd6bf5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd6bf5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd6bf5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

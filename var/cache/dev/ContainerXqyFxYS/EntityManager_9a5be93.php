<?php

namespace ContainerXqyFxYS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder86802 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0367d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties26a60 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getConnection', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getMetadataFactory', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getExpressionBuilder', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'beginTransaction', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getCache', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'transactional', array('func' => $func), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'commit', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->commit();
    }

    public function rollback()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'rollback', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getClassMetadata', array('className' => $className), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'createQuery', array('dql' => $dql), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'createNamedQuery', array('name' => $name), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'createQueryBuilder', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'flush', array('entity' => $entity), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'clear', array('entityName' => $entityName), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->clear($entityName);
    }

    public function close()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'close', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->close();
    }

    public function persist($entity)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'persist', array('entity' => $entity), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'remove', array('entity' => $entity), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'refresh', array('entity' => $entity), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'detach', array('entity' => $entity), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'merge', array('entity' => $entity), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'contains', array('entity' => $entity), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getEventManager', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getConfiguration', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'isOpen', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getUnitOfWork', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getProxyFactory', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'initializeObject', array('obj' => $obj), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'getFilters', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'isFiltersStateClean', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'hasFilters', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return $this->valueHolder86802->hasFilters();
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

        $instance->initializer0367d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder86802) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder86802 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder86802->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, '__get', ['name' => $name], $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        if (isset(self::$publicProperties26a60[$name])) {
            return $this->valueHolder86802->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86802;

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

        $targetObject = $this->valueHolder86802;
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
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86802;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86802;
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
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, '__isset', array('name' => $name), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86802;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder86802;
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
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, '__unset', array('name' => $name), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86802;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder86802;
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
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, '__clone', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        $this->valueHolder86802 = clone $this->valueHolder86802;
    }

    public function __sleep()
    {
        $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, '__sleep', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;

        return array('valueHolder86802');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0367d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0367d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0367d && ($this->initializer0367d->__invoke($valueHolder86802, $this, 'initializeProxy', array(), $this->initializer0367d) || 1) && $this->valueHolder86802 = $valueHolder86802;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86802;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86802;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

<?php

namespace ContainerXOKB665;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere6c70 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercf98f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb4a86 = [
        
    ];

    public function getConnection()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getConnection', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getMetadataFactory', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getExpressionBuilder', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'beginTransaction', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getCache', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getCache();
    }

    public function transactional($func)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'transactional', array('func' => $func), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'wrapInTransaction', array('func' => $func), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'commit', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->commit();
    }

    public function rollback()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'rollback', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getClassMetadata', array('className' => $className), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'createQuery', array('dql' => $dql), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'createNamedQuery', array('name' => $name), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'createQueryBuilder', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'flush', array('entity' => $entity), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'clear', array('entityName' => $entityName), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->clear($entityName);
    }

    public function close()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'close', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->close();
    }

    public function persist($entity)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'persist', array('entity' => $entity), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'remove', array('entity' => $entity), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'refresh', array('entity' => $entity), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'detach', array('entity' => $entity), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'merge', array('entity' => $entity), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getRepository', array('entityName' => $entityName), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'contains', array('entity' => $entity), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getEventManager', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getConfiguration', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'isOpen', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getUnitOfWork', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getProxyFactory', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'initializeObject', array('obj' => $obj), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'getFilters', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'isFiltersStateClean', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'hasFilters', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return $this->valueHoldere6c70->hasFilters();
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

        $instance->initializercf98f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere6c70) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere6c70 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere6c70->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, '__get', ['name' => $name], $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        if (isset(self::$publicPropertiesb4a86[$name])) {
            return $this->valueHoldere6c70->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6c70;

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

        $targetObject = $this->valueHoldere6c70;
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
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6c70;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere6c70;
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
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, '__isset', array('name' => $name), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6c70;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere6c70;
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
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, '__unset', array('name' => $name), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6c70;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere6c70;
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
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, '__clone', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        $this->valueHoldere6c70 = clone $this->valueHoldere6c70;
    }

    public function __sleep()
    {
        $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, '__sleep', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;

        return array('valueHoldere6c70');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercf98f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercf98f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercf98f && ($this->initializercf98f->__invoke($valueHoldere6c70, $this, 'initializeProxy', array(), $this->initializercf98f) || 1) && $this->valueHoldere6c70 = $valueHoldere6c70;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere6c70;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere6c70;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

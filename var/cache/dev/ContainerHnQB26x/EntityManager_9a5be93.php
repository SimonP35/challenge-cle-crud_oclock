<?php

namespace ContainerHnQB26x;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0c714 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc3690 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2af81 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getConnection', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getMetadataFactory', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getExpressionBuilder', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'beginTransaction', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getCache', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'transactional', array('func' => $func), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->transactional($func);
    }

    public function commit()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'commit', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->commit();
    }

    public function rollback()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'rollback', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getClassMetadata', array('className' => $className), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'createQuery', array('dql' => $dql), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'createNamedQuery', array('name' => $name), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'createQueryBuilder', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'flush', array('entity' => $entity), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'clear', array('entityName' => $entityName), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->clear($entityName);
    }

    public function close()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'close', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->close();
    }

    public function persist($entity)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'persist', array('entity' => $entity), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'remove', array('entity' => $entity), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'refresh', array('entity' => $entity), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'detach', array('entity' => $entity), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'merge', array('entity' => $entity), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'contains', array('entity' => $entity), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getEventManager', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getConfiguration', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'isOpen', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getUnitOfWork', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getProxyFactory', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'initializeObject', array('obj' => $obj), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'getFilters', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'isFiltersStateClean', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'hasFilters', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return $this->valueHolder0c714->hasFilters();
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

        $instance->initializerc3690 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0c714) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0c714 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0c714->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, '__get', ['name' => $name], $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        if (isset(self::$publicProperties2af81[$name])) {
            return $this->valueHolder0c714->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c714;

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

        $targetObject = $this->valueHolder0c714;
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
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c714;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0c714;
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
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, '__isset', array('name' => $name), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c714;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0c714;
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
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, '__unset', array('name' => $name), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c714;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0c714;
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
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, '__clone', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        $this->valueHolder0c714 = clone $this->valueHolder0c714;
    }

    public function __sleep()
    {
        $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, '__sleep', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;

        return array('valueHolder0c714');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc3690 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc3690;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc3690 && ($this->initializerc3690->__invoke($valueHolder0c714, $this, 'initializeProxy', array(), $this->initializerc3690) || 1) && $this->valueHolder0c714 = $valueHolder0c714;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0c714;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0c714;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

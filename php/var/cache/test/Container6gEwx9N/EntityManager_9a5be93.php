<?php

namespace Container6gEwx9N;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderecf30 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer51d47 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0bcc7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getConnection', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getMetadataFactory', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getExpressionBuilder', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'beginTransaction', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getCache', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getCache();
    }

    public function transactional($func)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'transactional', array('func' => $func), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'wrapInTransaction', array('func' => $func), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'commit', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->commit();
    }

    public function rollback()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'rollback', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getClassMetadata', array('className' => $className), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'createQuery', array('dql' => $dql), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'createNamedQuery', array('name' => $name), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'createQueryBuilder', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'flush', array('entity' => $entity), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'clear', array('entityName' => $entityName), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->clear($entityName);
    }

    public function close()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'close', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->close();
    }

    public function persist($entity)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'persist', array('entity' => $entity), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'remove', array('entity' => $entity), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'refresh', array('entity' => $entity), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'detach', array('entity' => $entity), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'merge', array('entity' => $entity), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getRepository', array('entityName' => $entityName), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'contains', array('entity' => $entity), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getEventManager', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getConfiguration', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'isOpen', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getUnitOfWork', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getProxyFactory', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'initializeObject', array('obj' => $obj), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'getFilters', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'isFiltersStateClean', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'hasFilters', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return $this->valueHolderecf30->hasFilters();
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

        $instance->initializer51d47 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderecf30) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderecf30 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderecf30->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, '__get', ['name' => $name], $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        if (isset(self::$publicProperties0bcc7[$name])) {
            return $this->valueHolderecf30->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecf30;

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

        $targetObject = $this->valueHolderecf30;
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
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecf30;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderecf30;
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
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, '__isset', array('name' => $name), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecf30;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderecf30;
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
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, '__unset', array('name' => $name), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecf30;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderecf30;
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
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, '__clone', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        $this->valueHolderecf30 = clone $this->valueHolderecf30;
    }

    public function __sleep()
    {
        $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, '__sleep', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;

        return array('valueHolderecf30');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer51d47 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer51d47;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer51d47 && ($this->initializer51d47->__invoke($valueHolderecf30, $this, 'initializeProxy', array(), $this->initializer51d47) || 1) && $this->valueHolderecf30 = $valueHolderecf30;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderecf30;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderecf30;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

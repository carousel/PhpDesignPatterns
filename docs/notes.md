#DESIGN PATTERNS NOTES
*   patterns emerged from practice
*   object oriented designs often end up with classes that have no counterparts in the real world
*   strict modeling of the real world leads to a system that reflects today's realities but not necessarily tomorrow's
*   an object may have many types, and widely different objects can share a type.
*   In contrast, an object's type only refers to its interface—the set of requests to which it can respond.
*   An object's interface characterizes the complete set of requests that can be sent to the object
*   A type is a name used to denote a particular interface.
*   An object may have many types, and widely different objects can share a type
*   Don't declare variables to be instances of particular concrete classes
*   The runtime association of a request to an object and one of its operations is known as dynamic binding
*   Type vs implementation
*   An object's implementation is defined by its class
*   Of course,there's a close relationship between class and type. Because a class defines the operations an object can perform, it also defines the object's type.
*   REUSING CONCEPT
*   Reuse by subclassing (compile type) is often referred to as WHITEBOX reuse. The term "white#box" refers to visibility
*   Reuse by composition (run time) is called BLACKBOX reuse, because no internal details of objects are visible
*   Implementation inheritance problem
*   Inheritance's ability to define families of objects with identical interfaces
*   Object composition == more objects, less class hierarchies
*   Assembling existing components (never quite rich set of objects)
*   Inheritance (new object from old ones, $this)
*   Delegation is a way of making composition as powerful for reuse as inheritance (self)
*   Delegation (reference to object)
*   In delegation, two objects are involved in handling a request: a receiving object delegates operations to its delegate,which is analogous to subclasses deferring requests to parent classes.
*   The code structure is frozen at compile time;
*   A program's runtime structure consists of rapidly changing networks of communicating objects
*   Aggregation implies that an aggregate object and its owner have identical lifetimes.
*   Aggregation relationships tend to be fewer and more permanent than acquaintance. 
*   Acquaintances, in contrast, are made and remain more frequently, sometimes existing only for the duration of an operation
*   The system's runtime structure must be imposed more by the designer than the language.
*   The runtime structures aren't clear from the code until you understand the patterns.
*   Encapsulating the concept that varies (change without redesign)
*   Heavy use of object composition can make designs harder to understand.
*   Since the framework's main contribution to an application is the architecture it defines. Therefore it's imperative to design the framework to be as flexible and extensible as possible.
*   Design patterns are smaller, more abstract and less specialized then framework
*   safety and transparency (where to define operations?)
*   identify (less obvious) abstractions
*   object granularity (size)
*   run time (dynamic binding)


#TOP LEVEL PATTERNS CLASIFICATION
##By purpose (what pattern does)
*   Creational  (class/inheritance/interface, object/composition)
*   Structural  (class/inheritance/interface, object/composition)
*   Behavioral  (class/inheritance/interface, object/composition)
##By scope (to classes or objects)
*   class scope (inheritance,static)
*   object scope (composition,dynamic,runtime)

*   CREATIONAL class patterns defer some part of object creation to subclasses, while Creational object patterns defer it to another object. 
*   STRUCTURAL class patterns use inheritance to compose classes, while the Structural object patterns describe ways to assemble objects. 
*   BEHAVIORAL class patterns use inheritance to describe algorithms and flow of control, whereas the Behavioral object patterns describe how a group of objects cooperate to perform a task that no single object can carry out alone.

##Most patterns are in object scope

THREE KIND OF SOFTWARE 
=======================
Application programs (internal reuse)
##
Toolkits (like subroutine libraries, write the code/call toolkit)
##
Frameworks (design reuse over code reuse,reuse the framework/call the code,inversion of control)
##

#CREATIONAL (Creational patterns become important as systems evolve to depend more on object composition than class inheritance)
##Abstract Factory
*   PARTICIPANTS (ABSTRACT/CONCRETE FACTORY, ABSTRACT/CONCRETE PRODUCT,CLIENT)
*   Provide an interface for creating families of related or dependent objects without specifying their concrete classes
*   Clients manipulate instances through their abstract interfaces
*   the difference is that the intended purpose of the class containing a factory method is not to create objects, while an abstract factory should only be used to create objects.
*   Create objects at run##time
*   Expose abstract method factory name (to client) 
*   Encapsulate creation process (hidden from client)
*   Required subclassing
*   Client is calling subclass (which encapsulate instantiation of objects)
##Factory method
*   PARTICIPANTS (PRODUCT INTERFACE/CONCRETE PRODUCT, ABSTRACT/CONCRETE PRODUCT,CLIENT)
*   the difference is that the intended purpose of the class containing a factory method is not to create objects, while an abstract factory should only be used to create objects.
*   Define an interface for creating an object, but let subclasses decide which class to instantiate
*   Similar to abstract factory 
*   Subclass has more freedom (what to instantiate)
*   Choice is given to client
##Builder
*   creates object in multi##step process (factory creates object in one step)
*   Separate the construction of a complex object from its representation so that the same construction process can create different representations
*   Build object in steps
*   Director and builder
*   Builder is calling dependente object (what to build)
*   Director is calling builder
*   Client is calling director
##Singleton
*   Ensure a class has only one instance, and provide a global point of access to it
##Prototype 
*   __clone to other slot of memory,delegation

#STRUCTURAL(compositional, logic internal to the structure, wrappers)
##Adapter (known as wrapper)
*   level of indirection
*   reuse old interface
*   convert interface into one that clients expect (for one or many objects)
*   different interface from wrapped class(derived)
*   exposes only releveant methods to client
*   Participants (Adapter,Adaptee,Target,Client)
*   make things work after they are designed
*   True wrapper example (encapsulation)
*   Wrapper for dependency object
*   Client calls wrapper methods which forwards to adapted code
*   Not transparent to client
##Decorator (known as wrapper) 
*   level of indirection
*   recursive composition
*   open ended number of objects
*   change skin
*   focus embellishment
*   transparent enclosure (to client)
*   client doesn't know difference
*   decorator forwards request to its component object
*   conform to component interface
*   lightweight component
*   Attach additional responsibilities to an object dynamically
*   smart proxy
*   wrapped in constructor
*   inheritance is not feasible because it is static and applies to an entire class
*   decorate object at run##time,
*   more flexible then inheritance
*   same interface as wrapped class
*   alternative to subclassing
*   must be a subclass of wrapped interface/object
*   example: grahical embellishment
##Bridge (handle/body) 
*   push implmentation details to separate hirerarcy
*   level of indirection
*   decouple an abstraction from its implementation so that the two can vary independently (orthogonal)
*   allow layering
*   abstraction and implementation can be extended differently
*   more complex variation of adapter
*   run##time binding of the implementation
*   adapter makes things work before design 
*   common interface for implementation
*   bridge make things work after they are designed
##Proxy 
*   level of indirection
*   only one relationship (static?)
*   provide a surrogate or placeholder for another object to control access to it
*   limit access
*   surrogate for another object
*   same interface as wrapped class
*   wrapped may not exist
*   no object in constructor
*   only one relationship
##Facade 
*   provide a unified interface to a set of interfaces in a subsystem. Facade defines a higher##level interface that makes the subsystem easier to use
*   higher level interface (for one or many objects)
*   different interface,new interface
*   unidirectional protocol
##Composite (composite/leaf)
*   recursive composition
*   open ended number of objects
*   representation
*   compose objects into tree structures to represent whole##part hierarchies. 
*   composite lets clients treat individual objects and compositions of objects uniformly
*   treat primitive and composite objects same
*   part##whole hierarchies as object
*   client use component class interface
*   composite implements component interface
*   nearly every user interface toolkit or framework uses a composite (from original Smalltalk MVC view implementation)
*   presentation pattern
##Flyweight (sharing expensive resources)
*   use sharing to support large numbers of fine##grained objects efficiently
*   share what is common (intrinsic)
*   extrinsic
*   Flyweight context
#BEHAVIORAL (decompositional, external to structure, sender/receiver,find what varies and encapsulate it)
##Chain of responsibility(multiple handlers for request/next)
*   delegation
*   avoid coupling the sender of a request to receiver by giving more then one object change to handle request
*   pass the object along the chain
*   successor reference
*   open ended number of objects
##Command 
*   encapsulate request as object (known as action/transaction)
*   request is object
*   client sets receiver and insantiate command 
*   absrtact command class which encapsulates interface for executing operations
*   attach command to invoker
*   invoker issues request by calling execute method
*   commands are OO replacement for callbacks
*   command is implementation of interface
*   invoker/receiver paradigm
*   execute command on receiver
*   undo operation (reverse)
##Iterator (known as cursor)
*   access aggregate object sequentially without exposing internals
*   iterator and data structure are coupled
##Mediator 
*   delegation
*   encapsulates communication between multiple objects
*   avoid system looks like monolithic
*   controlling and coordinating the interactions of a group of objects
*   indirect communication
*   lozalized behavior
*   replaces many##to##many with one##to##many
*   mediator encapsulate protocols
##Memento (known as token)
*   bookmark
*   capture and record objects internal state/for restoring state
*   snapshot
*   memento and originator are tightly coupled
##Observer (known as publish/subscribe)
*   define one to many dependency
*   subject and observer (arent tightly coupled together)
*   MVC as example(view is observer, model is subject)
*   query for subject state
*   push/pull
##State 
*   delegation
*   in a context
*   transition from state to state (defined by context)
*   context DELEGATES state specific request to concrete state class
*   The State pattern puts each branch of the conditional in a separate class.
*   CONTEXT IS PRIMARY INTERFACE FOR CLIENT
*   delegation (context to state)
*   finite numbet of states
*   change behaviour depending on state
*   extract state into different classes
*   order of state change
*   transition to state
*   vs strategy
##Strategy (known as policy)
*   delegation
*   vs state
*   interchangeable algorithms
*   many related classes differ only in their behavior
*   change guts
*   code to an interface (different algorithm implementation?)
*   key is to design interfaces for strategy and its context
##Template Method (algorithm skeleton in a base class)
*   delegation to subclass
*   implement invariant part of algorithm
*   localize common behavior
*   fundamental method for code reuse
*   used in frameworks
*   "the Hollywood principle," that is, "Don't call us, we'll call you"
##Visitor (define new operation without changing classes/recursive structure)
*   delegation
*   operation on elements of structure
*   "accepts" the visitor
*   makes adding new operations easy
*   gathers related operatons and separates unrelated
*   is elements class hierarchy stable?
*   double dispatch (depends on two elements, request and receiver)
##Interpreter

#COMPARISON
#CASE STUDY (lexi editor)
##Document structure,representation,recursive composition,hierarchy(composite)
*   my example?
##formatting (Strategy)
*   my example?
##Embelishment (Decorator)
*   my example?
##Create families of objects (Abstract factory)
*   my example?
##Allow differnt hierarchies to work even if they evolve independently,decouple interface abstraction from implementatnin abstraction(Brigde)
*   my example?
##Command (encapsulate request,centralized access to functionality scattered throughout application)
*   my example?
##Iterator
##Captures techniques for supporting access and traversal over different object (Iterator,store their own copy of the state of traversal)
* my example   
##Different analysis often require same kind of traversal

##UML
*   dependency
*   association (related,not dependent)
*   aggregation/composition (has)
*   inheritance

##Important patterns concepts
*   client (interface)
*   intent
*   naming
##Creational
*   abstract factory (general factory concept)
*   factory method   (general factory concept)
*   singleton (reference to same object)
*   builder (car factory)
##Structural
*   adapter (power socket)
*   decorator (enhancement instead of object creation)
*   facade (organize complex event)
*   composite (organization hierarchy)
*   proxy (lawyer)
*   bridge
*   flyweight
##Behavioral
*   chain
*   command (remote controller)
*   mediator (protocol)
*   observer (mailman)
*   visitor
*   template (common knowledge for a student)
*   state
*   memento
*   strategy (which sorting algorithm to choose)
##Structural vs behavioral
*   structural (larger structures, more objects/classes)
*   behavioral (communication/think about interfaces/methods)
#INTENT
##Abstract Factory (87) 
    Provide an interface for creating families of related or dependent objects without specifying their concrete classes. 
##Factory Method (107) 
    Define an interface for creating an object, but let subclasses decide which class to instantiate. Factory Method lets a class defer instantiation to subclasses. 
##Builder (97) 
    Separate the construction of a complex object from its representation so that the same construction process can create different representations. 
##Singleton (127) 
    Ensure a class only has one instance, and provide a global point of access to it. 
##Prototype (117) 
    Specify the kinds of objects to create using a prototypical instance, and create new objects by copying this prototype. 

##Adapter (139) 
    Convert the interface of a class into another interface clients expect. Adapter lets classes work together that couldn't otherwise because of incompatible interfaces. 
##Bridge (151) 
    Decouple an abstraction from its implementation so that the two can vary independently. 
##Decorator (175) 
    Attach additional responsibilities to an object dynamically. Decorators provide a flexible alternative to subclassing for extending functionality. 
##Proxy (207) 
    Provide a surrogate or placeholder for another object to control access to it. 
##Facade (185) 
    Provide a unified interface to a set of interfaces in a subsystem. Facade defines a higher##level interface that makes the subsystem easier to use. 
##Composite (163) 
    Compose objects into tree structures to represent part##whole hierarchies. Composite lets clients treat individual objects and compositions of objects uniformly. 
##Flyweight (195) 
    Use sharing to support large numbers of fine##grained objects efficiently. 

##Command (233) 
    Encapsulate a request as an object, thereby letting you parameterize clients with  different requests, queue or log requests, and support undoable operations. 
##Observer (293) 
    Define a one##to##many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically. 
##Strategy (315) 
    Define a family of algorithms, encapsulate each one, and make them interchangeable. Strategy lets the algorithm vary independently from clients that use it. 
##Chain of Responsibility (223) 
    Avoid coupling the sender of a request to its receiver by giving more than one object a chance to handle the request. Chain the receiving objects and pass the request along the chain until an object handles it. 
##Mediator (273) 
    Define an object that encapsulates how a set of objects interact. Mediator promotes loose coupling by keeping objects from referring to each other explicitly, and it lets you vary their interaction independently. 
##Memento (283) 
    Without violating encapsulation, capture and externalize an object's internal state so that the object can be restored to this state later. 
##State (305) 
    Allow an object to alter its behavior when its internal state changes. The object will appear to change its class. 
##Template Method (325) 
    Define the skeleton of an algorithm in an operation, deferring some steps to subclasses. Template Method lets subclasses redefine certain steps of an algorithm without changing the algorithm's structure. 
##Visitor (331)
    Represent an operation to be performed on the elements of an object structure. Visitor lets you define a new operation without changing the classes of the elements on which it operates. 
##Interpreter (243) 
    Given a language, define a represention for its grammar along with an interpreter that uses the representation to interpret sentences in the language. 
##Iterator (257) 
    Provide a way to access the elements of an aggregate object sequentially without exposing its underlying representation. 

    
###Every pattern has one purpose
###Almost every pattern has creational process, structure and behavior

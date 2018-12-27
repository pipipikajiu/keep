##1 .  面向对象
```php
类(class)
new 类 产生一个对象
属性 = 变量
方法 = 函数
```

```php
构造函数 : __contruct(),当产生对象时调用,不能被重载(不能重名);
析构函数 : __destruct(),对象被销毁时调用    (unset(),直接赋值为null或者其他值)
```
## 2 . static静态关键字
```php
- 2.1 . 静态属性和静态方法,可以在不实例化类的情况下,调用(属性:static public $name  方法:static public tell(){}):
类名 :: 方法名
类名 :: 属性名

- 2.2 . 静态方法中，$this伪变量不允许使用。可以使用self，parent，在内部调用静态方法与属性。



```

1、双引号和单引号的区别
双引号解释变量，单引号不解释变量
双引号里插入单引号，其中单引号里如果有变量的话，变量解释
双引号的变量名后面必须要有一个非数字、字母、下划线的特殊字符，或者用{}讲变量括起来，否则会将变量名后面的部分当做一个整体，引起语法错误
双引号解释转义字符，单引号不解释转义字符，但是解释'\和\\
能使单引号字符尽量使用单引号，单引号的效率比双引号要高（因为双引号要先遍历一遍，判断里面有没有变量，然后再进行操作，而单引号则不需要判断）

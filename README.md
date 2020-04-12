# PHPdbman

A user Friendly PHP database manager.

## Built With

*[PHP 7.4.3](https://www.php.net/releases/7_4_3.php)
*[MySql](https://mysql.com/) 

# Installation

### Create Mysql Database

```
CREATE DATABASE multi_user;
```


### Import Table

```
CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  INSERT INTO `admin_login` (`id`, `name`, `username`, `password`, `level`) VALUES
  (1, 'admin', 'admin', 'admin', 'admin');

  ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);



  ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```

## Demo

[Demo](http://www.dvuser.totalh.net)
User: admin 
  Passwd: admin


## Authors

Windtalker IT Team - (https://github.com/dieforuser)

## License

This project is licensed under the GNU 3 License - see the [LICENSE.md](https://github.com/dieforuser/PHPdbman/blob/master/LICENSE) file for details

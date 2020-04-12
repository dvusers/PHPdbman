# PHPdbman

A user Friendly PHP database manager.

## Built With

* [PHP 7.4.3](https://www.php.net/releases/7_4_3.php)
* [MySql](https://mysql.com/) 

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

--
-- Dumping data untuk tabel `admin_login`
--

INSERT INTO `admin_login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_login`
--
  ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_login`
--
  ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```

## Demo

* [Demo](http://www.dropwizard.io/1.0.2/docs/)
* User: admin 
  Passwd:admin


## Authors

* **Windtalker IT Team** - (https://github.com/dieforuser)

## License

This project is licensed under the GNU 3 License - see the [LICENSE.md](https://github.com/dieforuser/PHPdbman/blob/master/LICENSE) file for details

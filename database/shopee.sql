CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` nvarchar(200) NOT NULL,
  `item_name` nvarchar(255) NOT NULL,
  `item_price` double(10,3) NOT NULL,
  `item_image` nvarchar(255) NOT NULL
);

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`,`item_brand`, `item_name`, `item_price`, `item_image`) VALUES
(1, 'Unisex', 'Hoodie', 199.000, './assets/products/1.jpg'),
(2, 'Summer', 'Ao Coc Tay', 119.000, './assets/products/2.jpg'),
(3, 'Summer', 'Ao Bong Da', 159.000, './assets/products/3.jpg'),
(4, 'Summer', 'Ao Bong Ro', 299.000, './assets/products/4.jpg'),
(5, 'Summer', 'Ao Bong Chay', 389.000, './assets/products/5.jpg'),
(6, 'Winter', 'Ao Phao', 479.000, './assets/products/6.jpg'),
(7, 'Winter', 'Ao Len', 122.000, './assets/products/7.jpg'),
(8, 'Winter', 'Ao Long Vu', 122.000, './assets/products/8.jpg'),
(9, 'Unisex', 'Ao Tam Bien', 152.000, './assets/products/9.jpg'),
(10, 'Unisex', 'Quan Dui', 152.000, './assets/products/10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

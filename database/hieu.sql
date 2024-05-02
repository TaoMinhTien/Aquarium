-- CREATE TABLE 'Banner'(
--     'id' INT NOT NULL,
--     'title' VARCHAR(50) NOT NULL,
--     'description' VARCHAR(200) NOT NULL
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- CREATE TABLE `Banner_images` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `Banner_id` int(11) DEFAULT NULL,
--   `image_url` varchar(255) NOT NULL
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- CREATE TABLE 'Information' (
--     'id' INT NOT NULL,
--     'title' VARCHAR(50) NOT NULL,
--     'description' VARCHAR(200) NOT NULL
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- CREATE TABLE 'Information_images' (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `Information_id` int(11) DEFAULT NULL,
--   `image_url` varchar(255) NOT NULL
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- CREATE TABLE 'Overview'(
--     'id' INT NOT NULL,
--     'title' VARCHAR(50) NOT NULL,
--     'description' VARCHAR(200) NOT NULL
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- CREATE TABLE 'Overview_images' (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `Overview_id` int(11) DEFAULT NULL,
--   `image_url` varchar(255) NOT NULL
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- CREATE TABLE 'AboutUs'(
--     'id' INT NOT NULL,
--     'client_name' VARCHAR(50) NOT NULL,
--     'description' VARCHAR(200) NOT NULL
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- CREATE TABLE 'AboutUs_images' (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `AboutUs_id` int(11) DEFAULT NULL,
--   `image_url` varchar(255) NOT NULL
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- ALTER TABLE `Banner`
--   ADD PRIMARY KEY (`id`);

-- ALTER TABLE `Banner_images`
--   ADD PRIMARY KEY (`id`),
--   ADD FOREIGN KEY (`Banner_id`) REFERENCES `Banner` (`id`);

-- ALTER TABLE `Information`
--   ADD PRIMARY KEY (`id`);

-- ALTER TABLE `Information_images`
--   ADD PRIMARY KEY (`id`),
--   ADD FOREIGN KEY (`Information_id`) REFERENCES `Information` (`id`);

-- ALTER TABLE `Overview`
--   ADD PRIMARY KEY (`id`);

-- ALTER TABLE `Overview_images`
--   ADD PRIMARY KEY (`id`),
--   ADD FOREIGN KEY (`Overview_id`) REFERENCES `Overview` (`id`);

-- ALTER TABLE `AboutUs`
--   ADD PRIMARY KEY (`id`);

-- ALTER TABLE `AboutUs_images`
--   ADD PRIMARY KEY (`id`),
--   ADD FOREIGN KEY (`AboutUs_id`) REFERENCES `AboutUs` (`id`);




-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2021 at 04:54 PM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 5.6.31
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
  AUTOCOMMIT = 0;
START TRANSACTION;
SET
  time_zone = "+00:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;
--
  -- Database: `baobieu_db`
  --
  -- --------------------------------------------------------
  --
  -- Table structure for table `bangnhap`
  --
  CREATE TABLE `bangnhap` (
    `id` int(10) NOT NULL,
    `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `hienthi` int(11) NOT NULL,
    `tongchiphi` int(10) NOT NULL,
    `sonhapchuot` int(10) NOT NULL,
    `uniquevisitor` int(10) NOT NULL,
    `tongsokhachtuvan` int(10) NOT NULL,
    `hieuqua` int(10) NOT NULL,
    `khonghieuqua` int(10) NOT NULL,
    `dathen` int(10) NOT NULL,
    `denkham` int(11) DEFAULT NULL,
    `ghichu` int(10) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `bangnhap`
  --
INSERT INTO
  `bangnhap` (
    `id`,
    `ngaythang`,
    `hienthi`,
    `tongchiphi`,
    `sonhapchuot`,
    `uniquevisitor`,
    `tongsokhachtuvan`,
    `hieuqua`,
    `khonghieuqua`,
    `dathen`,
    `denkham`,
    `ghichu`
  )
VALUES
  (
    10,
    '2021-02-28 17:00:00',
    30016,
    77591200,
    3777,
    1124,
    241,
    42,
    111,
    31,
    NULL,
    46
  ),
  (
    11,
    '2021-03-01 17:00:00',
    29060,
    69599349,
    3542,
    1690,
    179,
    38,
    86,
    20,
    NULL,
    20
  ),
  (
    12,
    '2021-03-02 17:00:00',
    30260,
    74008506,
    3688,
    897,
    239,
    42,
    139,
    26,
    NULL,
    19
  ),
  (
    13,
    '2021-03-03 17:00:00',
    32284,
    72030244,
    3761,
    2803,
    193,
    30,
    96,
    24,
    NULL,
    31
  ),
  (
    16,
    '2021-03-04 17:00:00',
    32720,
    90464917,
    3999,
    2254,
    195,
    32,
    110,
    21,
    NULL,
    20
  ),
  (
    17,
    '2021-03-05 17:00:00',
    30819,
    100455126,
    3760,
    870,
    207,
    42,
    102,
    31,
    NULL,
    21
  ),
  (
    18,
    '2021-03-06 17:00:00',
    32284,
    99884255,
    3925,
    908,
    203,
    35,
    96,
    29,
    NULL,
    29
  ),
  (
    19,
    '2021-03-07 17:00:00',
    28509,
    81539078,
    3260,
    777,
    146,
    30,
    74,
    23,
    NULL,
    15
  ),
  (
    20,
    '2021-03-09 17:00:00',
    34317,
    109443704,
    4008,
    968,
    228,
    45,
    107,
    30,
    NULL,
    24
  ),
  (
    21,
    '2021-03-08 17:00:00',
    34916,
    101115852,
    4079,
    1070,
    246,
    35,
    126,
    36,
    NULL,
    34
  ),
  (
    22,
    '2021-03-10 17:00:00',
    31505,
    99072934,
    3796,
    869,
    242,
    38,
    131,
    24,
    NULL,
    36
  ),
  (
    23,
    '2021-03-11 17:00:00',
    35013,
    96803506,
    4165,
    1110,
    233,
    43,
    99,
    36,
    NULL,
    40
  ),
  (
    24,
    '2021-03-12 17:00:00',
    35724,
    98261623,
    4248,
    1285,
    246,
    30,
    139,
    24,
    NULL,
    35
  ),
  (
    25,
    '2021-03-13 17:00:00',
    31985,
    80461583,
    3666,
    911,
    161,
    30,
    87,
    40,
    NULL,
    16
  ),
  (
    26,
    '2021-03-14 17:00:00',
    31560,
    99632476,
    3976,
    1134,
    202,
    37,
    101,
    26,
    NULL,
    23
  ),
  (
    27,
    '2021-03-15 17:00:00',
    33114,
    107947543,
    4123,
    1312,
    231,
    38,
    114,
    29,
    NULL,
    27
  ),
  (
    28,
    '2021-03-16 17:00:00',
    31557,
    109601994,
    3877,
    1025,
    234,
    38,
    125,
    33,
    NULL,
    26
  ),
  (
    29,
    '2021-03-17 17:00:00',
    31337,
    105017634,
    3898,
    875,
    218,
    33,
    112,
    38,
    NULL,
    31
  ),
  (
    30,
    '2021-03-18 17:00:00',
    33673,
    102686766,
    4137,
    1203,
    212,
    43,
    103,
    28,
    NULL,
    40
  ),
  (
    31,
    '2021-03-19 17:00:00',
    33796,
    102367768,
    4095,
    1126,
    249,
    37,
    130,
    33,
    NULL,
    40
  ),
  (
    32,
    '2021-03-20 17:00:00',
    34065,
    110286280,
    4209,
    1200,
    251,
    42,
    130,
    28,
    NULL,
    33
  ),
  (
    33,
    '2021-03-21 17:00:00',
    35460,
    120112352,
    4508,
    1192,
    243,
    36,
    122,
    37,
    NULL,
    36
  ),
  (
    34,
    '2021-03-22 17:00:00',
    36413,
    119961918,
    4547,
    1129,
    231,
    31,
    115,
    28,
    NULL,
    36
  ),
  (
    35,
    '2021-03-23 17:00:00',
    34292,
    120622624,
    4293,
    1089,
    231,
    42,
    109,
    29,
    NULL,
    37
  ),
  (
    36,
    '2021-03-24 17:00:00',
    33984,
    110421554,
    4094,
    806,
    225,
    38,
    111,
    22,
    NULL,
    37
  ),
  (
    37,
    '2021-03-25 17:00:00',
    39010,
    120600796,
    4847,
    1130,
    277,
    48,
    167,
    28,
    NULL,
    20
  ),
  (
    38,
    '2021-03-26 17:00:00',
    37886,
    113665495,
    4773,
    1314,
    280,
    42,
    143,
    45,
    NULL,
    47
  ),
  (
    39,
    '2021-03-27 17:00:00',
    39510,
    120565615,
    4982,
    1266,
    244,
    36,
    120,
    33,
    NULL,
    45
  ),
  (
    40,
    '2021-03-28 17:00:00',
    40237,
    119770903,
    5067,
    1142,
    229,
    30,
    120,
    46,
    NULL,
    23
  ),
  (
    41,
    '2021-03-29 17:00:00',
    37236,
    113613763,
    4611,
    1298,
    273,
    41,
    153,
    34,
    NULL,
    39
  ),
  (
    42,
    '2021-03-31 17:00:00',
    34017,
    111625645,
    4263,
    861,
    214,
    37,
    96,
    34,
    NULL,
    NULL
  ),
  (
    43,
    '2021-03-30 17:00:00',
    35924,
    122021860,
    4439,
    993,
    231,
    26,
    131,
    27,
    NULL,
    NULL
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `bangnhapcc`
  --
  CREATE TABLE `bangnhapcc` (
    `id` int(10) NOT NULL,
    `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `hienthi` int(11) NOT NULL,
    `tongchiphi` int(11) NOT NULL,
    `sonhapchuot` int(10) NOT NULL,
    `uniquevisitor` int(10) NOT NULL,
    `tongsokhachtuvan` int(10) NOT NULL,
    `hieuqua` int(10) NOT NULL,
    `khonghieuqua` int(10) NOT NULL,
    `dathen` int(10) NOT NULL,
    `ghichu` int(10) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `bangnhapcc`
  --
INSERT INTO
  `bangnhapcc` (
    `id`,
    `ngaythang`,
    `hienthi`,
    `tongchiphi`,
    `sonhapchuot`,
    `uniquevisitor`,
    `tongsokhachtuvan`,
    `hieuqua`,
    `khonghieuqua`,
    `dathen`,
    `ghichu`
  )
VALUES
  (
    1,
    '2021-03-31 17:00:00',
    5092,
    72312,
    37,
    3,
    3,
    0,
    3,
    0,
    0
  ),
  (
    2,
    '2021-02-28 17:00:00',
    6896,
    188243,
    71,
    11,
    11,
    0,
    10,
    1,
    0
  ),
  (
    3,
    '2021-03-01 17:00:00',
    7896,
    171892,
    57,
    9,
    9,
    2,
    7,
    0,
    0
  ),
  (
    4,
    '2021-03-02 17:00:00',
    7245,
    102653,
    46,
    8,
    8,
    0,
    8,
    0,
    0
  ),
  (
    5,
    '2021-03-03 17:00:00',
    6715,
    111594,
    46,
    7,
    7,
    1,
    1,
    0,
    0
  ),
  (
    6,
    '2021-03-04 17:00:00',
    7278,
    138918,
    62,
    11,
    11,
    0,
    11,
    0,
    0
  ),
  (
    7,
    '2021-03-05 17:00:00',
    7325,
    116287,
    49,
    7,
    7,
    0,
    7,
    0,
    0
  ),
  (
    8,
    '2021-03-06 17:00:00',
    14617,
    120306,
    44,
    4,
    4,
    0,
    4,
    0,
    0
  ),
  (
    9,
    '2021-03-07 17:00:00',
    5932,
    131554,
    53,
    4,
    4,
    0,
    4,
    0,
    0
  ),
  (
    10,
    '2021-03-08 17:00:00',
    8911,
    124425,
    52,
    10,
    10,
    0,
    10,
    0,
    0
  ),
  (
    11,
    '2021-03-09 17:00:00',
    6278,
    125038,
    48,
    12,
    12,
    1,
    10,
    1,
    0
  ),
  (
    12,
    '2021-03-10 17:00:00',
    5991,
    93513,
    39,
    3,
    3,
    0,
    3,
    0,
    0
  ),
  (
    13,
    '2021-03-11 17:00:00',
    7100,
    123932,
    54,
    6,
    6,
    0,
    6,
    0,
    0
  ),
  (
    14,
    '2021-03-12 17:00:00',
    7573,
    112887,
    52,
    2,
    2,
    0,
    2,
    0,
    0
  ),
  (
    15,
    '2021-03-13 17:00:00',
    9617,
    104070,
    44,
    6,
    6,
    1,
    5,
    0,
    0
  ),
  (
    16,
    '2021-03-14 17:00:00',
    9135,
    152241,
    63,
    7,
    7,
    0,
    7,
    0,
    0
  ),
  (
    17,
    '2021-03-15 17:00:00',
    7901,
    127247,
    50,
    13,
    13,
    0,
    13,
    0,
    0
  ),
  (
    18,
    '2021-03-16 17:00:00',
    9404,
    118646,
    50,
    4,
    4,
    0,
    4,
    0,
    0
  ),
  (
    19,
    '2021-03-17 17:00:00',
    6458,
    85930,
    34,
    4,
    4,
    0,
    4,
    0,
    0
  ),
  (
    20,
    '2021-03-18 17:00:00',
    9664,
    193529,
    73,
    6,
    6,
    1,
    5,
    0,
    0
  ),
  (
    21,
    '2021-03-19 17:00:00',
    9664,
    144244,
    60,
    7474,
    5,
    0,
    4,
    1,
    0
  ),
  (
    22,
    '2021-03-20 17:00:00',
    7079,
    124878,
    59,
    15,
    15,
    0,
    15,
    0,
    0
  ),
  (
    23,
    '2021-03-21 17:00:00',
    5854,
    143783,
    57,
    6,
    6,
    0,
    6,
    0,
    0
  ),
  (
    24,
    '2021-03-22 17:00:00',
    5770,
    96859,
    44,
    9,
    9,
    2,
    7,
    0,
    0
  ),
  (
    25,
    '2021-03-23 17:00:00',
    5713,
    137826,
    63,
    10,
    10,
    0,
    10,
    0,
    0
  ),
  (
    26,
    '2021-03-24 17:00:00',
    7516,
    92251,
    69,
    15,
    15,
    0,
    15,
    0,
    0
  ),
  (
    27,
    '2021-03-26 17:00:00',
    0,
    168821,
    69,
    15,
    15,
    0,
    15,
    0,
    0
  ),
  (
    28,
    '2021-03-28 17:00:00',
    6832,
    115150,
    48,
    11,
    11,
    0,
    11,
    0,
    0
  ),
  (
    29,
    '2021-03-29 17:00:00',
    4732,
    155361,
    58,
    8,
    8,
    0,
    8,
    0,
    0
  ),
  (
    30,
    '2021-03-30 17:00:00',
    4732,
    115361,
    58,
    12,
    12,
    0,
    12,
    0,
    0
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `bangnhapdt`
  --
  CREATE TABLE `bangnhapdt` (
    `id` int(10) NOT NULL,
    `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `tongsokhachtuvan` int(10) NOT NULL,
    `hieuqua` int(10) NOT NULL,
    `khonghieuqua` int(10) NOT NULL,
    `dathen` int(10) NOT NULL,
    `adwords` int(10) NOT NULL,
    `facebook` int(10) NOT NULL,
    `seo` int(10) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `bangnhapdt`
  --
INSERT INTO
  `bangnhapdt` (
    `id`,
    `ngaythang`,
    `tongsokhachtuvan`,
    `hieuqua`,
    `khonghieuqua`,
    `dathen`,
    `adwords`,
    `facebook`,
    `seo`
  )
VALUES
  (6, '2021-02-28 17:00:00', 10, 0, 0, 10, 10, 0, 0),
  (
    7,
    '2021-03-01 17:00:00',
    16,
    16,
    0,
    16,
    15,
    0,
    1
  ),
  (8, '2021-03-02 17:00:00', 13, 0, 0, 13, 13, 0, 0),
  (9, '2021-03-03 17:00:00', 12, 0, 0, 12, 12, 0, 0),
  (
    10,
    '2021-03-04 17:00:00',
    13,
    0,
    0,
    13,
    12,
    0,
    1
  ),
  (
    11,
    '2021-03-05 17:00:00',
    11,
    0,
    0,
    11,
    11,
    0,
    0
  ),
  (
    12,
    '2021-03-06 17:00:00',
    14,
    0,
    0,
    14,
    14,
    0,
    0
  ),
  (13, '2021-03-07 17:00:00', 4, 0, 0, 4, 4, 0, 0),
  (
    14,
    '2021-03-08 17:00:00',
    58,
    21,
    17,
    20,
    15,
    5,
    0
  ),
  (
    15,
    '2021-03-09 17:00:00',
    26,
    2,
    1,
    23,
    22,
    0,
    1
  ),
  (
    16,
    '2021-03-10 17:00:00',
    19,
    3,
    1,
    15,
    13,
    2,
    0
  ),
  (
    17,
    '2021-03-11 17:00:00',
    29,
    2,
    12,
    16,
    15,
    1,
    0
  ),
  (
    18,
    '2021-03-12 17:00:00',
    18,
    0,
    0,
    18,
    18,
    0,
    0
  ),
  (
    19,
    '2021-03-13 17:00:00',
    44,
    15,
    17,
    12,
    8,
    1,
    3
  ),
  (
    20,
    '2021-03-14 17:00:00',
    32,
    7,
    13,
    15,
    15,
    0,
    0
  ),
  (
    21,
    '2021-03-15 17:00:00',
    25,
    3,
    4,
    18,
    18,
    0,
    0
  ),
  (
    22,
    '2021-03-16 17:00:00',
    31,
    10,
    11,
    13,
    12,
    0,
    1
  ),
  (
    23,
    '2021-03-17 17:00:00',
    40,
    9,
    20,
    11,
    9,
    0,
    2
  ),
  (24, '2021-03-18 17:00:00', 28, 8, 11, 9, 7, 0, 2),
  (
    25,
    '2021-03-19 17:00:00',
    47,
    4,
    33,
    10,
    9,
    0,
    1
  ),
  (
    26,
    '2021-03-20 17:00:00',
    24,
    1,
    5,
    18,
    18,
    0,
    0
  ),
  (
    27,
    '2021-03-21 17:00:00',
    44,
    13,
    18,
    14,
    12,
    12,
    0
  ),
  (
    28,
    '2021-03-22 17:00:00',
    44,
    10,
    18,
    22,
    21,
    0,
    1
  ),
  (
    29,
    '2021-03-23 17:00:00',
    31,
    2,
    1,
    16,
    14,
    0,
    2
  ),
  (
    30,
    '2021-03-24 17:00:00',
    25,
    2,
    6,
    17,
    17,
    0,
    0
  ),
  (
    31,
    '2021-03-25 17:00:00',
    56,
    9,
    33,
    14,
    14,
    0,
    0
  ),
  (
    32,
    '2021-03-26 17:00:00',
    26,
    0,
    10,
    16,
    15,
    1,
    0
  ),
  (
    33,
    '2021-03-27 17:00:00',
    23,
    5,
    19,
    10,
    10,
    0,
    0
  ),
  (
    34,
    '2021-03-28 17:00:00',
    30,
    12,
    8,
    10,
    10,
    0,
    0
  ),
  (
    35,
    '2021-03-29 17:00:00',
    37,
    15,
    17,
    6,
    6,
    0,
    0
  ),
  (
    36,
    '2021-03-31 17:00:00',
    18,
    11,
    7,
    10,
    10,
    0,
    0
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `bangnhapfb`
  --
  CREATE TABLE `bangnhapfb` (
    `id` int(10) NOT NULL,
    `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `tongchiphi` int(10) NOT NULL,
    `hienthi` int(10) NOT NULL,
    `sonhapchuot` int(10) NOT NULL,
    `tongsokhachtuvan` int(10) NOT NULL,
    `hieuqua` int(10) NOT NULL,
    `khonghieuqua` int(10) NOT NULL,
    `dathen` int(10) NOT NULL,
    `giathanh` int(10) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `bangnhapfb`
  --
INSERT INTO
  `bangnhapfb` (
    `id`,
    `ngaythang`,
    `tongchiphi`,
    `hienthi`,
    `sonhapchuot`,
    `tongsokhachtuvan`,
    `hieuqua`,
    `khonghieuqua`,
    `dathen`,
    `giathanh`
  )
VALUES
  (
    4,
    '2021-02-28 17:00:00',
    3735647,
    35986,
    31446,
    2,
    0,
    0,
    2,
    0
  ),
  (
    5,
    '2021-03-01 17:00:00',
    4593760,
    47722,
    42811,
    54,
    19,
    29,
    6,
    0
  ),
  (
    6,
    '2021-03-02 17:00:00',
    4797599,
    50340,
    46438,
    34,
    17,
    16,
    1,
    0
  ),
  (
    7,
    '2021-03-03 17:00:00',
    4642090,
    52899,
    48219,
    64,
    28,
    33,
    3,
    0
  ),
  (
    8,
    '2021-03-04 17:00:00',
    4186745,
    47786,
    44939,
    47,
    13,
    32,
    2,
    0
  ),
  (
    9,
    '2021-03-05 17:00:00',
    4171309,
    41048,
    38275,
    37,
    11,
    24,
    2,
    0
  ),
  (
    10,
    '2021-03-06 17:00:00',
    4940217,
    48786,
    45809,
    50,
    31,
    14,
    5,
    0
  ),
  (
    11,
    '2021-03-07 17:00:00',
    4235400,
    49424,
    46372,
    44,
    24,
    18,
    2,
    0
  ),
  (
    12,
    '2021-03-08 17:00:00',
    4314676,
    45896,
    42994,
    47,
    10,
    32,
    5,
    0
  ),
  (
    13,
    '2021-03-09 17:00:00',
    3811511,
    44162,
    42327,
    51,
    7,
    38,
    6,
    0
  ),
  (
    14,
    '2021-03-10 17:00:00',
    4528063,
    57521,
    53795,
    39,
    9,
    27,
    3,
    0
  ),
  (
    15,
    '2021-03-11 17:00:00',
    4135498,
    55548,
    53301,
    32,
    19,
    10,
    3,
    0
  ),
  (
    16,
    '2021-03-12 17:00:00',
    4580620,
    54735,
    51756,
    57,
    10,
    44,
    3,
    0
  ),
  (
    17,
    '2021-03-13 17:00:00',
    4673121,
    52170,
    54399,
    113,
    40,
    70,
    3,
    0
  ),
  (
    18,
    '2021-03-14 17:00:00',
    4657001,
    53434,
    50884,
    33,
    17,
    13,
    3,
    0
  ),
  (
    19,
    '2021-03-15 17:00:00',
    4795884,
    54620,
    50024,
    62,
    6,
    51,
    4,
    0
  ),
  (
    20,
    '2021-03-16 17:00:00',
    593894,
    57450,
    54296,
    79,
    10,
    69,
    0,
    0
  ),
  (
    21,
    '2021-03-17 17:00:00',
    4984566,
    63817,
    115250,
    38,
    9,
    28,
    1,
    0
  ),
  (
    22,
    '2021-03-18 17:00:00',
    5039927,
    67506,
    64993,
    41,
    5,
    36,
    0,
    0
  ),
  (
    23,
    '2021-03-19 17:00:00',
    4786549,
    66300,
    64940,
    65,
    10,
    54,
    1,
    0
  ),
  (
    24,
    '2021-03-20 17:00:00',
    5038434,
    58662,
    57440,
    40,
    11,
    26,
    3,
    0
  ),
  (
    25,
    '2021-03-21 17:00:00',
    5617031,
    60465,
    58982,
    67,
    21,
    44,
    2,
    0
  ),
  (
    26,
    '2021-03-22 17:00:00',
    6575154,
    59946,
    57643,
    64,
    48,
    14,
    2,
    0
  ),
  (
    27,
    '2021-03-23 17:00:00',
    6634329,
    64482,
    61066,
    45,
    4,
    38,
    3,
    0
  ),
  (
    28,
    '2021-03-24 17:00:00',
    6299638,
    60690,
    58818,
    83,
    11,
    71,
    1,
    0
  ),
  (
    29,
    '2021-03-25 17:00:00',
    5449357,
    46952,
    44487,
    48,
    13,
    34,
    1,
    0
  ),
  (
    30,
    '2021-03-26 17:00:00',
    6129160,
    49702,
    46679,
    104,
    58,
    43,
    3,
    0
  ),
  (
    31,
    '2021-03-27 17:00:00',
    5367047,
    47290,
    45367,
    36,
    10,
    22,
    4,
    0
  ),
  (
    32,
    '2021-03-28 17:00:00',
    4450210,
    41620,
    40267,
    138,
    26,
    111,
    1,
    0
  ),
  (
    33,
    '2021-03-29 17:00:00',
    4232373,
    38294,
    37096,
    43,
    13,
    29,
    1,
    0
  ),
  (
    34,
    '2021-03-31 17:00:00',
    0,
    0,
    0,
    39,
    10,
    27,
    2,
    0
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `bangnhapgdn`
  --
  CREATE TABLE `bangnhapgdn` (
    `id` int(10) NOT NULL,
    `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `hienthi` int(11) NOT NULL,
    `tongchiphi` int(10) NOT NULL,
    `sonhapchuot` int(10) NOT NULL,
    `uniquevisitor` int(10) NOT NULL,
    `tongsokhachtuvan` int(10) NOT NULL,
    `hieuqua` int(10) NOT NULL,
    `khonghieuqua` int(10) NOT NULL,
    `dathen` int(10) NOT NULL,
    `denkham` int(11) DEFAULT NULL,
    `ghichu` int(11) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
-- --------------------------------------------------------
  --
  -- Table structure for table `bangnhapseo`
  --
  CREATE TABLE `bangnhapseo` (
    `id` int(10) NOT NULL,
    `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `tongsokhachtuvan` int(10) NOT NULL,
    `hieuqua` int(10) NOT NULL,
    `khonghieuqua` int(10) NOT NULL,
    `dathen` int(10) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `bangnhapseo`
  --
INSERT INTO
  `bangnhapseo` (
    `id`,
    `ngaythang`,
    `tongsokhachtuvan`,
    `hieuqua`,
    `khonghieuqua`,
    `dathen`
  )
VALUES
  (1, '2021-03-31 17:00:00', 328, 8, 118, 5),
  (2, '2021-02-28 17:00:00', 141, 9, 109, 4),
  (3, '2021-03-01 17:00:00', 151, 8, 117, 3),
  (4, '2021-03-02 17:00:00', 141, 8, 107, 3),
  (5, '2021-03-03 17:00:00', 135, 8, 106, 1),
  (6, '2021-03-04 17:00:00', 156, 8, 110, 7),
  (7, '2021-03-05 17:00:00', 155, 4, 122, 3),
  (8, '2021-03-06 17:00:00', 157, 6, 110, 2),
  (9, '2021-03-07 17:00:00', 140, 4, 116, 1),
  (10, '2021-03-08 17:00:00', 170, 5, 132, 1),
  (11, '2021-03-09 17:00:00', 154, 2, 119, 3),
  (12, '2021-03-10 17:00:00', 154, 4, 119, 3),
  (13, '2021-03-11 17:00:00', 103, 4, 87, 3),
  (14, '2021-03-12 17:00:00', 107, 1, 85, 5),
  (15, '2021-03-13 17:00:00', 101, 4, 91, 1),
  (16, '2021-03-14 17:00:00', 100, 3, 79, 3),
  (18, '2021-03-15 17:00:00', 102, 3, 79, 6),
  (19, '2021-03-16 17:00:00', 105, 5, 85, 2),
  (20, '2021-03-17 17:00:00', 117, 1, 98, 4),
  (21, '2021-03-18 17:00:00', 95, 4, 81, 0),
  (22, '2021-03-19 17:00:00', 79, 0, 63, 2),
  (23, '2021-03-20 17:00:00', 96, 0, 73, 4);
-- --------------------------------------------------------
  --
  -- Table structure for table `bangnhapzl`
  --
  CREATE TABLE `bangnhapzl` (
    `id` int(10) NOT NULL,
    `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `tongsokhachtuvan` int(10) NOT NULL,
    `hieuqua` int(10) NOT NULL,
    `khonghieuqua` int(10) NOT NULL,
    `dathen` int(10) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `bangnhapzl`
  --
INSERT INTO
  `bangnhapzl` (
    `id`,
    `ngaythang`,
    `tongsokhachtuvan`,
    `hieuqua`,
    `khonghieuqua`,
    `dathen`
  )
VALUES
  (4, '2021-02-28 17:00:00', 1, 0, 0, 1),
  (5, '2021-03-01 17:00:00', 2, 0, 0, 2),
  (6, '2021-03-02 17:00:00', 3, 0, 0, 3),
  (7, '2021-03-03 17:00:00', 2, 0, 0, 2),
  (8, '2021-03-04 17:00:00', 3, 0, 0, 3),
  (9, '2021-03-05 17:00:00', 2, 0, 0, 2),
  (10, '2021-03-06 17:00:00', 2, 0, 0, 2),
  (11, '2021-03-07 17:00:00', 0, 0, 0, 0),
  (12, '2021-03-08 17:00:00', 4, 0, 0, 4),
  (13, '2021-03-09 17:00:00', 2, 0, 0, 2),
  (14, '2021-03-10 17:00:00', 0, 0, 0, 0),
  (15, '2021-03-11 17:00:00', 1, 0, 0, 1),
  (16, '2021-03-12 17:00:00', 2, 0, 0, 2),
  (17, '2021-03-13 17:00:00', 0, 0, 0, 0),
  (18, '2021-03-15 17:00:00', 1, 0, 0, 1),
  (19, '2021-03-14 17:00:00', 0, 0, 0, 0),
  (20, '2021-03-16 17:00:00', 1, 0, 0, 1),
  (21, '2021-03-17 17:00:00', 3, 0, 0, 3),
  (22, '2021-03-18 17:00:00', 0, 0, 0, 0),
  (23, '2021-03-19 17:00:00', 2, 0, 0, 2),
  (24, '2021-03-20 17:00:00', 3, 0, 0, 3),
  (25, '2021-03-21 17:00:00', 1, 0, 0, 1),
  (26, '2021-03-22 17:00:00', 1, 0, 0, 1),
  (27, '2021-03-23 17:00:00', 2, 0, 0, 2),
  (28, '2021-03-24 17:00:00', 0, 0, 0, 0),
  (29, '2021-03-25 17:00:00', 2, 0, 0, 2),
  (30, '2021-03-26 17:00:00', 3, 0, 0, 3),
  (31, '2021-03-28 17:00:00', 1, 0, 0, 1),
  (32, '2021-03-29 17:00:00', 3, 0, 0, 3),
  (33, '2021-03-27 17:00:00', 3, 0, 0, 3),
  (34, '2021-03-30 17:00:00', 7, 0, 0, 7);
-- --------------------------------------------------------
  --
  -- Table structure for table `masokham`
  --
  CREATE TABLE `masokham` (
    `id` int(10) NOT NULL,
    `msk` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
    `idbangnhap` int(10) NOT NULL,
    `idnguonden` int(10) NOT NULL,
    `idnguondenseo` int(10) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
-- --------------------------------------------------------
  --
  -- Table structure for table `nguoidung`
  --
  CREATE TABLE `nguoidung` (
    `id` int(10) NOT NULL,
    `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
    `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
    `idr` int(10) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `nguoidung`
  --
INSERT INTO
  `nguoidung` (`id`, `username`, `password`, `idr`)
VALUES
  (
    4,
    'nhockool1002',
    '6ac66b5cb3d198e4587a747c13ac3c9d',
    1
  ),
  (
    5,
    'admin',
    '0c99e18ca735e4939d634af0b5cc0d39',
    1
  ),
  (6, 'mayo', 'eaf2b43dac7b97e2bc1da40485d71f1b', 1);
-- --------------------------------------------------------
  --
  -- Table structure for table `nguonden`
  --
  CREATE TABLE `nguonden` (
    `id` int(10) NOT NULL,
    `nguonden` varchar(100) COLLATE utf8_unicode_ci NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `nguonden`
  --
INSERT INTO
  `nguonden` (`id`, `nguonden`)
VALUES
  (7, 'zalo'),
  (8, 'facebook'),
  (9, 'coccoc.com'),
  (10, 'gdn'),
  (11, 'seo');
-- --------------------------------------------------------
  --
  -- Table structure for table `nguondenseo`
  --
  CREATE TABLE `nguondenseo` (
    `id` int(10) NOT NULL,
    `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `nguondenseo`
  --
INSERT INTO
  `nguondenseo` (`id`, `name`)
VALUES
  (1, 'mayo.com.vn'),
  (2, 'google maps');
-- --------------------------------------------------------
  --
  -- Table structure for table `quyenhan`
  --
  CREATE TABLE `quyenhan` (
    `id` int(10) NOT NULL,
    `quyenhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
--
  -- Dumping data for table `quyenhan`
  --
INSERT INTO
  `quyenhan` (`id`, `quyenhan`)
VALUES
  (1, 'Administrators');
--
  -- Indexes for dumped tables
  --
  --
  -- Indexes for table `bangnhap`
  --
ALTER TABLE
  `bangnhap`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `bangnhapcc`
  --
ALTER TABLE
  `bangnhapcc`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `bangnhapdt`
  --
ALTER TABLE
  `bangnhapdt`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `bangnhapfb`
  --
ALTER TABLE
  `bangnhapfb`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `bangnhapgdn`
  --
ALTER TABLE
  `bangnhapgdn`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `bangnhapseo`
  --
ALTER TABLE
  `bangnhapseo`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `bangnhapzl`
  --
ALTER TABLE
  `bangnhapzl`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `masokham`
  --
ALTER TABLE
  `masokham`
ADD
  PRIMARY KEY (`id`),
ADD
  KEY `idbangnhap` (`idbangnhap`),
ADD
  KEY `idnguonden` (`idnguonden`),
ADD
  KEY `idnguondensep` (`idnguondenseo`);
--
  -- Indexes for table `nguoidung`
  --
ALTER TABLE
  `nguoidung`
ADD
  PRIMARY KEY (`id`),
ADD
  KEY `idr` (`idr`);
--
  -- Indexes for table `nguonden`
  --
ALTER TABLE
  `nguonden`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `nguondenseo`
  --
ALTER TABLE
  `nguondenseo`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `quyenhan`
  --
ALTER TABLE
  `quyenhan`
ADD
  PRIMARY KEY (`id`);
--
  -- AUTO_INCREMENT for dumped tables
  --
  --
  -- AUTO_INCREMENT for table `bangnhap`
  --
ALTER TABLE
  `bangnhap`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 44;
--
  -- AUTO_INCREMENT for table `bangnhapcc`
  --
ALTER TABLE
  `bangnhapcc`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 31;
--
  -- AUTO_INCREMENT for table `bangnhapdt`
  --
ALTER TABLE
  `bangnhapdt`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 37;
--
  -- AUTO_INCREMENT for table `bangnhapfb`
  --
ALTER TABLE
  `bangnhapfb`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 35;
--
  -- AUTO_INCREMENT for table `bangnhapgdn`
  --
ALTER TABLE
  `bangnhapgdn`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT;
--
  -- AUTO_INCREMENT for table `bangnhapseo`
  --
ALTER TABLE
  `bangnhapseo`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 24;
--
  -- AUTO_INCREMENT for table `bangnhapzl`
  --
ALTER TABLE
  `bangnhapzl`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 35;
--
  -- AUTO_INCREMENT for table `masokham`
  --
ALTER TABLE
  `masokham`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT;
--
  -- AUTO_INCREMENT for table `nguoidung`
  --
ALTER TABLE
  `nguoidung`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 7;
--
  -- AUTO_INCREMENT for table `nguonden`
  --
ALTER TABLE
  `nguonden`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 12;
--
  -- AUTO_INCREMENT for table `nguondenseo`
  --
ALTER TABLE
  `nguondenseo`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
--
  -- AUTO_INCREMENT for table `quyenhan`
  --
ALTER TABLE
  `quyenhan`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;
--
  -- Constraints for dumped tables
  --
  --
  -- Constraints for table `masokham`
  --
ALTER TABLE
  `masokham`
ADD
  CONSTRAINT `masokham_ibfk_1` FOREIGN KEY (`idbangnhap`) REFERENCES `bangnhap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `masokham_ibfk_2` FOREIGN KEY (`idnguonden`) REFERENCES `nguonden` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `masokham_ibfk_3` FOREIGN KEY (`idnguondenseo`) REFERENCES `nguondenseo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
  -- Constraints for table `nguoidung`
  --
ALTER TABLE
  `nguoidung`
ADD
  CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`idr`) REFERENCES `quyenhan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
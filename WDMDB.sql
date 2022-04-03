/*Helllloooo*/
create database WEBSIEUNHAN
go
use WDMDB
go
create table Hang_SX(
	MaHangSX int identity primary key,
	TenHangSX nvarchar(100),
	DCHangSX nvarchar(200)
) 
go
create table Loai_MH(
	MaLMH int identity primary key,
	TenLMH nvarchar(20)
)
go
create table Mat_Hang(
	MaMH int identity primary key,
	TenMH nvarchar(100),
	GiaBan int,
	GiaNhap int,
	MoTa nvarchar(255),
	SoLuongTon int,
	BaoHanh int,
	TrangThai nvarchar(15),
	HangSX int references Hang_SX(MaHangSX),
	LoaiMH int references Loai_MH(MaLMH)
) 
go
create table Chuc_Vu(
	MaCV int identity primary key,
	TenCV nvarchar(50)
)
go 
create table Nhan_Vien(
	MaNV char(5) primary key,
	TenNV nvarchar(50),
	MatKhauNV varchar(50),
	ChucVu int references Chuc_Vu(MaCV) 	
)
go 

create table Khach_Hang(
	EmailKH nvarchar(50) primary key,
	TenKH nvarchar(50),
	DiaChiKH nvarchar(100),
	SDTKH varchar(11),
	MatKhauKH varchar(50)
 )
 go
 create table Hoa_Don(
	MaHD int identity primary key,
	NgayMua datetime,
	TongTien int,
	TrangThaiTT bit,
	EmailKH nvarchar(50)references Khach_Hang(EmailKH),
	MaNV char(5) references Nhan_Vien(MaNV),
	note nvarchar(255)
 )
 go
 create table CT_HD(
	MaCTHD int identity primary key,
	MaMH int references Mat_Hang(MaMH),
	SLMua int,
	DonGia int,
	MaHD int references Hoa_Don(MaHD)  
 )
 go



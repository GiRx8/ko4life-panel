USE [KN_ONLINE]
GO

/****** Object:  Table [dbo].[TB_USER]    Script Date: 7/4/2022 10:48:59 AM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[TB_USER](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[strAccountID] [varchar](21) NOT NULL,
	[strPasswd] [varchar](13) NOT NULL,
	[strSocNo] [varchar](20) NULL,
	[name] [varchar](25) NOT NULL,
	[email] [varchar](50) NOT NULL,
	[pin] [varchar](25) NOT NULL,
	[role] [varchar](8) NOT NULL,
	[strAuthority] [tinyint] NOT NULL,
	[PremiumExpire] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO



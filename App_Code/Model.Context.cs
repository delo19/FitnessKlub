﻿//------------------------------------------------------------------------------
// <auto-generated>
//    This code was generated from a template.
//
//    Manual changes to this file may cause unexpected behavior in your application.
//    Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

using System;
using System.Data.Entity;
using System.Data.Entity.Infrastructure;

public partial class pswEntities : DbContext
{
    public pswEntities()
        : base("name=pswEntities")
    {
    }

    protected override void OnModelCreating(DbModelBuilder modelBuilder)
    {
        throw new UnintentionalCodeFirstException();
    }

    public DbSet<odzywki> odzywki { get; set; }
    public DbSet<urzadzenia> urzadzenia { get; set; }
    public DbSet<uzytkownicy> uzytkownicy { get; set; }
    public DbSet<zamowienia> zamowienia { get; set; }
}

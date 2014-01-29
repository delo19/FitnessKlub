using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Contact : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack)
        {
            Validate();

            if (IsValid)
            {
                outputLabel.Text = "Wiadomosc wyslana!<br/>" +
                   "Dane:<br/>";
                outputLabel.Text +=
                   String.Format("Imie: {0}{1}E-mail: {2}{1} Treść: {3}{1}",
                      name.Text, "<br/>", email.Text, tresc.Text);
                outputLabel.Visible = true;
            }
        }
    }


    private void DisplayCustomers()
    {
    //    using (var dc = new pswEntities())
    //    {
    //        var customers = from c in dc.odzywki
    //                        select new
    //                        {
    //                            CusomerId = c.CustomerID,
    //                            Name = c.ContactName,
    //                            Title = c.ContactTitle,
    //                            Country = c.Country
    //                        };

    //        dgvCustomers.DataSource = customers;
    //    }
    }



}
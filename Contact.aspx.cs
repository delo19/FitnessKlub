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
    //       string connStr = "server=localhost;user=root;database=world;port=3306;password=******;";
    //    MySqlConnection conn = new MySqlConnection(connStr);
    //    try
    //    {
    //        Console.WriteLine("Connecting to MySQL...");
    //        conn.Open();
    //        // Perform database operations
    //    }
    //    catch (Exception ex)
    //    {
    //        Console.WriteLine(ex.ToString());
    //    }
    //    conn.Close();
    //    Console.WriteLine("Done.");

        if (IsPostBack)
        {
            Validate(); // validate the form

            // if the form is valid
            if (IsValid)
            {
                // retrieve the values submitted by the user
                string name2 = name.Text;
                string email2 = email.Text;
                string wiek = age.Text;

                // show the the submitted values
                outputLabel.Text = "Wiadomosc wyslana!<br/>" +
                   "Dane:<br/>";
                outputLabel.Text +=
                   String.Format("Imie: {0}{1}E-mail: {2}{1} Treść: {3}{1}",
                      name2, "<br/>", email2, tresc.Text);
                outputLabel.Visible = true; // display the output message
            } // end if
        } // end if
    }


    
}
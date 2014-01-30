using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class ASPPAges_ListaProduktow : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        using (var dc = new pswEntities())
        {
            var user = (from us in dc.uzytkownicy select us).ToList();
            ileUserow.Text = "W bazie jest zarejestrowanych osób: :"+user.Count.ToString();
        }
    }

    void login()
    {
        using (var dc = new pswEntities())
        {
            var user = (from us in dc.uzytkownicy where us.Login==Login.UserName && us.Haslo==Login.Password select us).ToList();
            if (user != null && user.Count > 0)
            {
                MySession.zalogowanyUser = user.First();
            }
            else
            {
                Login.UserNameRequiredErrorMessage = "Logowanie zakonczone niepowodzeniem";
            }
        }
    }
    protected void Login_Authenticate(object sender, AuthenticateEventArgs e)
    {
        login();
    }
}
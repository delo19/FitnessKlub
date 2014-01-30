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
        podsumowanie.Text = Session["Do zaplaty"] == null ? "" : Session["Do zaplaty"].ToString();
                    
    }

    protected void okBtn_Click(object sender, EventArgs e)
    {
        using (var dc = new pswEntities())
        {
            var user = (from us in dc.uzytkownicy
                        where
                            us.Login == MySession.zalogowanyUser.Login && us.Haslo == MySession.zalogowanyUser.Haslo
                        select us).ToList();
            user.First().Cena = long.Parse(Session["Do zaplaty"].ToString());
            dc.SaveChanges();
        }
    }
}
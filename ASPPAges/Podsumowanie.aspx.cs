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
        podsumowanie.Text = Session["Do zaplaty"].ToString();
    }

}
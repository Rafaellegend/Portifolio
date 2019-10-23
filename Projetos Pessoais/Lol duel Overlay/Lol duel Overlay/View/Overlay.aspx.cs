using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Lol_duel_Overlay
{
    public partial class WebForm1 : System.Web.UI.Page
    {
        metodos met = new metodos();
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            int champ = Convert.ToInt32(BChamp.SelectedItem.Value);
            int ban1 = Convert.ToInt32(BBan1.SelectedItem.Value);
            int ban2 = Convert.ToInt32(BBan2.SelectedItem.Value);
            int ban3 = Convert.ToInt32(BBan3.SelectedItem.Value);

            string bani1= met.Champs(ban1,5);
            string bani2= met.Champs(ban2,5);
            string bani3= met.Champs(ban3,5);

            BBanimg1.ImageUrl = bani1;
            BBanimg2.ImageUrl = bani2;
            BBanimg3.ImageUrl = bani3;
        }
    }
}
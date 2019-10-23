using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Lol_duel_Overlay
{
    public class metodos
    {

        public metodos() { }

        public string Champs(int cha, int inf)
        {
            //lista de champs
            #region Campeões
            string[,] champ = new string[145, 6];

            #region Aatrox
            //nome
            champ[0, 0] = "Aatrox";
            //superior blue
            champ[0, 1] = "~/img/superior/blue/test.png";
            //superior red
            champ[0, 2] = "~/img/superior/red/test.png";
            //inferior blue
            champ[0, 3] = "~/img/inferior/blue/test.png";
            //inferior red
            champ[0, 4] = "~/img/inferior/red/test.png";
            //ban 
            champ[0, 5] = "~/img/ban/Aatrox.png";
            #endregion

            #region Ahri
            champ[1, 0] = "Ahri";
            //superior blue
            champ[1, 1] = "~/img/superior/blue/test.png";
            //superior red
            champ[1, 2] = "~/img/superior/red/test.png";
            //inferior blue
            champ[1, 3] = "~/img/inferior/blue/test.png";
            //inferior red
            champ[1, 4] = "~/img/inferior/red/test.png";
            //ban 
            champ[1, 5] = "~/img/ban/Ahri.png";
            #endregion

            #region Akali
            champ[2, 0] = "Akali";
            //superior blue
            champ[2, 1] = "~/img/superior/blue/test.png";
            //superior red
            champ[2, 2] = "~/img/superior/red/test.png";
            //inferior blue
            champ[2, 3] = "~/img/inferior/blue/test.png";
            //inferior red
            champ[2, 4] = "~/img/inferior/red/test.png";
            //ban 
            champ[2, 5] = "~/img/ban/Akali.png";
            #endregion

            #region Alistar
            champ[3, 0] = "Alistar";
            //superior blue
            champ[3, 1] = "~/img/superior/blue/test.png";
            //superior red
            champ[3, 2] = "~/img/superior/red/test.png";
            //inferior blue
            champ[3, 3] = "~/img/inferior/blue/test.png";
            //inferior red
            champ[3, 4] = "~/img/inferior/red/test.png";
            //ban 
            champ[3, 5] = "~/img/ban/Alistar.png";
            #endregion

            #region Amumu
            champ[4, 0] = "Amumu";
            //superior blue
            champ[4, 1] = "~/img/superior/blue/test.png";
            //superior red
            champ[4, 2] = "~/img/superior/red/test.png";
            //inferior blue
            champ[4, 3] = "~/img/inferior/blue/test.png";
            //inferior red
            champ[4, 4] = "~/img/inferior/red/test.png";
            //ban 
            champ[4, 5] = "~/img/ban/Amumu.png";
            #endregion

            #region Anivia
            champ[5, 0] = "Anivia";
            //superior blue
            champ[5, 1] = "~/img/superior/blue/test.png";
            //superior red
            champ[5, 2] = "~/img/superior/red/test.png";
            //inferior blue
            champ[5, 3] = "~/img/inferior/blue/test.png";
            //inferior red
            champ[5, 4] = "~/img/inferior/red/test.png";
            //ban 
            champ[5, 5] = "~/img/ban/Anivia.png";
            #endregion

            #endregion

            return champ[cha,inf];
        }

    }
}
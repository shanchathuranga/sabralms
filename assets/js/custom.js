/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function toggleMenuItem(id) 
{
    var menuItem = document.getElementById(id);

    if (menuItem.style.display == 'block')
    {
        menuItem.style.display = 'none';
    } 
    else 
    {
        menuItem.style.display = 'block';
    }
}

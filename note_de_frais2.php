<!DOCTYPE >
<html>

<head>
    <meta charset="UTF-8">

    <title>PPE</title>


    <link rel="stylesheet" href="./style.ndf.css" media="all">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="./bootstrap.min.css">
    

</head>


<form class="container" id="formulaire" [formGroup]="form" *ngIf="form">
    <div id="identite" [formGroup]="form.get('globalInfos')">
        <div class="input-group input-group-sm ">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sm">Nom :</span>
            </div>
            <input type="text" class="form-control" aria-label="Groupe d'input de petite taille" aria-describedby="inputGroup-sm" formControlName="name">

            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sm">Prenom :</span>
            </div>
            <input type="text" class="form-control" aria-label="Groupe d'input de petite taille" aria-describedby="inputGroup-sm" formControlName="company">
        </div>

        <div class="input-group input-group-sm ">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sm">Adresse :</span>
            </div>
            <input type="text" class="form-control" aria-label="Groupe d'input de petite taille" aria-describedby="inputGroup-sm" formControlName="courseName">
        </div>

       
    </div>


   


    <figure class="wp-block-table">
        <table class="eval" [formGroup]="form.get('evaluation')">
            <thead>
                <tr style="font-size: 0.7em; line-height: 1.6em;"></tr>
                <td>
                    <div class="eval_header">
                        <p></p>
                        <p class=" h5"> </p>
                    </div>
                </td>
                <td class=''></td>
                <td class=''></td>
                <td class=''></td>
                <td class=''></td>
            </thead>

            <tbody>
                <tr>
                    <td class="claire"> </td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="eval" [formGroup]="form.get('satisfaction')">
            <thead>
                <tr style="font-size: 0.7em; line-height: 1.6em;"></tr>
                <td>
                    <div class="eval_header">
                        <p></p>
                        <p class="text-black-50 h5"></p>
                    </div>
                </td>
                <td class='taille'></td>
                <td class='taille'></td>
                <td class='taille'></td>
                <td class='taille'></td>
            </thead>

            <tbody>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire">
                        
                    </td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="claire"></td>
                    <td class="case rouge">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case orange">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case jaune">
                        <div>
                            
                        </div>
                    </td>
                    <td class="case vert">
                        <div>
                            
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="eval">
            <thead>

                <tr>
                    <td colspan=11 class="thead" scop="row">
                        <div class="eval_header ">
                            <p class="h5"></p>
                            <p class="text-black-50 h5"></p>
                        </div>
                    </td>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 0" (click)="applyMark(0)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 1" (click)="applyMark(1)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 2" (click)="applyMark(2)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 3" (click)="applyMark(3)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 4" (click)="applyMark(4)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 5" (click)="applyMark(5)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 6" (click)="applyMark(6)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 7" (click)="applyMark(7)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 8" (click)="applyMark(8)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 9" (click)="applyMark(9)" class="case claire">
                    </td>
                    <td type="bouton" [class.selected]="form.get('global').get('globalMark').value === 10" (click)="applyMark(10)" class="case claire">
                    </td>
                </tr>
            </tbody>
        </table>
    </figure>

    <div id="comment">
        <label class="comment " for="story"></label>
        <br/>
        <p>Commentaire :</p>

        <textarea class="container" [formControl]="form.get('global').get('feedBack')" id="" name="" rows="5" cols=150%></textarea>
    </div>

    <div id="footer" fxLayout.lt-sm="column-reverse" fxLayout="row" fxLayoutAlign="space-between center">
        <div class="thanks" fxFlex="70">
            <p><br/>
            
            </p>

           
        </div>

       

    <div fxLayout="row" fxLayoutAlign="center center" class="bloc-validation">
        <button type="button" class="btn btn-primary" [disabled]="form.invalid || loading" (click)="onSubmit()">
      <mat-progress-spinner mode="indeterminate" [diameter]="20" *ngIf="loading">Envoyer</mat-progress-spinner>
    </button>
    </div>
</form>
@extends('layouts.LayoutAdmin')
 @section ('main')
 <form class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nom</label>
    <input type="text" class="form-control" id="validationDefault01" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="validationDefault02" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Matricule / Identifiant </label>
    <div class="input-group">
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class ="row g-4" >
  <div class="col-md-3">
  
    <label for="validationDefault04" class="form-label">Operation </label>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> id="validationDefault04" required>
      <option selected disabled value="">Operation...</option>
      <option>Achat</option>
      <option>Pret</option>
      <option>Prime de naissance </option>
      <option>prime de decee</option>
      <option>Prime de mariage </option>
      <option>Prime de circoncision</option>
      <option>Action de loisir </option>

    </select>
  </div>
  </div>
 </div>

     <div class ="row g-5">
       <div class = "col-md-4">
          <label for="validationDefault01" class="form-label">Article</label>
           <input type="text" class="form-control" id="validationDefault01" value="" required>
        </div>
       <div class="col-md-4">
         <label for="validationDefault02" class="form-label">Montant</label>
          <input type="text" class="form-control" id="validationDefault02" value="" required>
       </div>
      <div class="col-md-4">
         <label for="validationDefaultUsername" class="form-label">Id-justification</label>
         <div class="input-group">
            <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
        </div>
     </div>
  </div>
   <div class ="row g-6">
       <div class = "col-md-4">
         <label for="validationDefault01" class="form-label">Montant-a-retirer</label>
         <input type="text" class="form-control" id="validationDefault01" value="" required>
        </div>
       <div class="col-md-4">
         <label for="validationDefault02" class="form-label">date_debut</label>
         <input type="text" class="form-control" id="validationDefault02" value="" required>
       </div>
  </div>
  <div class ="row-7">
    <div class="col-md-12">
    <button class="btn btn-primary" type="submit">Valider</button>
  </div>
</div>
</form>
  @endsection 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
        @include('Dashbord.partials.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('Dashbord.partials.header')

        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </div>

            <div>
                    <div class="row">

                        <div class="col-lg-11">

                            <h2>Gestion des coursiers</h2>

                        </div>

                        <div class="col-lg-1">
                            <a class="btn btn-success" href="{{ url('coursier/create') }}">Ajouter</a>
                        </div>

                    </div>



                    @if ($message = Session::get('success'))

                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>

                    @endif


                    <div class="table-responsive">

                    <table class="table table-bordered">

                        <tr>

                            <th>No</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Numero_telephone</th>
                            <th>Numero_telephone_2</th>
                            <th>Numero_Permis_Conduire</th>
                            <th>Salaire</th>
                            <th>Statut</th>
                            <th>Nationalite</th>
                            <th>Type_Vehicule</th>
                            <th>Photo </th>
                            <th>Email</th>
                            <th>Plaque_immatriculation </th>
                            <th>Actions</th>

                        </tr>

                        @foreach ($coursiers as $index => $coursier)

                            <tr>
                                <td>{{ $index }}</td>
                                <td>{{ $coursier->nom }}</td>
                                <td>{{ $coursier->prenom}}</td>
                                <td>{{ $coursier->numero_telephone}}</td>
                                <td>{{ $coursier->numero_telephone_2}}</td>
                                <td>{{ $coursier->numero_permis_conduire}}</td>
                                <td>{{ $coursier->salaire}}</td>
                                <td>{{ $coursier->statut }}</td>
                                <td>{{ $coursier->nationalite }}</td>
                                <td>{{ $coursier->type_vehicule }}</td>
                                <td>{{ $coursier->photo }}</td>
                                <td>{{ $coursier->email}}</td>
                                <td>{{ $coursier->plaque_immatriculation }}</td>
                                <td>

                                    <form action="{{ url('coursier/'. $coursier->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a class="btn btn-info" href="{{ url('coursier/'. $coursier->id) }}">Voir</a>
                                        <a class="btn btn-primary" href="{{ url('coursier/'. $coursier->id .'/edit') }}">Modifier</a>

                                        <button type="submit" class="btn btn-danger">Supprimer</button>

                                    </form>

                                </td>

                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
            <!-- Modal Logout -->


          </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('Dashbord.partials.footer')

      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->

    <!-- Ajoutez le contenu de votre page ici -->


  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
</body>

</html>

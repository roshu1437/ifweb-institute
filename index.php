<!DOCTYPE html>
<html>
<head>
	<title>First Project</title>
	<?php include_once('files.php'); ?>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
</head>
<body>
<?php include_once('header.php'); ?>
<!-- body content -->
<!-- <div class="row">
	<div class="col l4 m6 s12 r center-align">test</div>
	<div class="col l4 m6 s12 b center-align">test</div>
	<div class="col l4 m6 s12 g center-align">test</div>
</div> -->
<div class="row">
	<!-- sidebar -->
	<div class="col l3 hide-on-med-and-down">
		<?php include_once('sidebar.php'); ?>
	</div>
	<div class="col l9">
		<div class="row">
			<!-- .col.s12.m4*50>.card>(.card-image>(img.materialboxed[src="< ?php url('assets/images/temp.jpeg')?>"])+(span.card-title({Box $}))+(a.btn-floating.halfway-fab.waves-effect.waves-light.red>i.material-icons({add})))+(.card-content>p({Lorem ipsum dolor sit})) -->
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 1</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 2</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 3</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 4</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 5</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 6</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 7</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 8</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 9</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 10</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 11</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 12</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 13</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 14</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 15</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 16</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 17</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 18</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 19</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 20</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 21</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 22</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 23</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 24</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 25</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 26</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 27</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 28</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 29</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 30</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 31</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 32</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 33</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 34</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 35</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 36</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 37</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 38</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 39</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 40</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 41</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 42</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 43</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 44</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 45</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 46</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 47</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 48</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 49</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card">
					<div class="card-image">
						<img src="<?php url('assets/images/temp.jpeg')?>" alt="" class="materialboxed">
						<span class="card-title">Box 50</span>
						<a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php'); ?>
</body>
</html>
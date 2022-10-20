<body>
	<div class="sidebar close">
		<div class="logo-details">
			<i class="icon-menu-logo"><a href="/"><img
					src="/assets/images/mini_logo.png" class="icon"></a></i> <span
				class="logo_name">Salada Mista</span>
		</div>
		<ul class="nav-links">
			<li>
				<div class="iocn-link">
					<a href="#"> <i class=""><img src="/assets/images/icon_1.png"
							class="icon-sidebar"></i> <span class="link_name">Proteção</span>
					</a> <i class='bx bxs-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Proteção</a></li>
					<li><a href="#">IST's</a></li>
					<li><a href="#">Contraceptivos</a></li>
					<li><a href="#">Preservativo</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#"> <i class=""><img src="/assets/images/icon_2.png"
							class="icon-sidebar"></i> <span class="link_name">Fertilidade</span>
					</a> <i class='bx bxs-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Fertilidade</a></li>
					<li><a href="#">Gravidez</a></li>
					<li><a href="#">Gestação</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#"> <i class=""><img src="/assets/images/icon_3.png"
							class="icon-sidebar"></i> <span class="link_name">Ciclo Menstrual</span>
					</a> <i class='bx bxs-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Ciclo Menstrual</a></li>
					<li><a href="#">Menstruação</a></li>
				</ul>
			</li>
			<li>
				<div class="iocn-link">
					<a href="#"> <i class=""><img src="/assets/images/icon_4.png"
							class="icon-sidebar"></i> <span class="link_name">Anatomia</span>
					</a> <i class='bx bxs-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Anatomia</a></li>
					<li><a href="#">Masculino</a></li>
					<li><a href="#">Feminino</a></li>
				</ul>
			</li>
			<li><a href="#"> <i class=""><img src="/assets/images/icon_5.png"
						class="icon-sidebar"></i> <span class="link_name">Suas Dúvidas</span>
			</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="#">Blog</a></li>
				</ul></li>
			<li><a href="#"> <i class=""><img src="/assets/images/icon_6.png"
						class="icon-sidebar"></i> <span class="link_name">Sobre Nós</span>
			</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="#">Conheça</a></li>
				</ul></li>
			<li>
				<div class="profile-details">
					<div class="profile-content">
						<img src="/assets/images/icon_user.png" alt="profileImg">
					</div>
					<div class="name-job">
						@auth {{ auth()->user()->email }}
						<div class="text-end">
							<a href="{{ route('logout.perform') }}"
								class="btn btn-outline-light me-2">Logout</a>
						</div>
						@endauth
					</div>
					<i class='bx bx-log-out'></i>
				</div>
			</li>
		</ul>
	</div>
</body>

</div>
</div>
</header>

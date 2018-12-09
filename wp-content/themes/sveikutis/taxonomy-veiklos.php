<?php 

$taxonomy = get_queried_object();
$book_background_img = get_field('seimos_knyga_fono_paveikslelis', 5);
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="global-header" style="background: url(<?php echo $book_background_img['url']; ?>) no-repeat; background-size: cover; background-attachment: fixed;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="block">
								<h1><?php echo $taxonomy->taxonomy?></h1>
							</div>
						</div>
					</div>
				</div>
			</section>
		
			<div class="container">
				<div class="row">
					<div class="col-md-12 one-class one-class-one">
						<h2><?php echo $taxonomy->name; ?></h2>
						<table>
							<tbody>
								<?php if (have_rows('veikla_pedagogai', $taxonomy)) : ?>
								<tr>
									<th>Pedagogas</th>
									<?php while (have_rows('veikla_pedagogai', $taxonomy)) : the_row(); 
									?>
										<td><a href="<?php echo (get_sub_field('veikla_pedagogas_url')) ? get_sub_field('veikla_pedagogas_url') : get_permalink(); ?>"><b><?php the_sub_field('veikla_pedagogas');  ?></b></a></td>
										<?php endwhile; ?>
									</tr>
								<?php endif; ?>
									
								<?php if (have_rows('veikla_kontaktai', $taxonomy)) : ?>
									<tr>
										<th>Kontaktai</th>
										<?php while (have_rows('veikla_kontaktai', $taxonomy)) : the_row(); ?>
											<td class="one-class-contact">
												<div><i class="fas fa-phone"></i><a href="tel:<?php the_sub_field('veikla_kontaktai_tel');  ?>"><b><?php the_sub_field('veikla_kontaktai_tel');  ?></b></a></div>
												<div><i class="far fa-envelope margin-top"></i><b><?php the_sub_field('veikla_kontaktai_email');  ?></b></div>
											</td>
										<?php endwhile; ?>
									</tr>          
								<?php endif; ?>
							
								<?php if (!empty(get_field('veikla_kam_skirta', $taxonomy))) : ?>  
									<tr>
										<th>Kam skirta</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_kam_skirta', $taxonomy);  ?>
										</td>
									</tr> 
								<?php endif; ?>     

								<?php if (!empty(get_field('veikla_dalyvavimo_pradzia', $taxonomy))) : ?>         
									<tr>
										<th>Dalyvavimo programoje pradžia</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_dalyvavimo_pradzia', $taxonomy);  ?>
										</td>
									</tr>     
								<?php endif; ?>    

								<?php if (!empty(get_field('veikla_trukme', $taxonomy))) : ?>         
									<tr>
										<th>Trukmė</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_trukme', $taxonomy);  ?>	
										</td>
									</tr>   
								<?php endif; ?>    

								<?php if (!empty(get_field('veikla_trukme', $taxonomy))) : ?>         
									<tr>
										<th>Dalyko siekiniai</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_trukme', $taxonomy);  ?>		
										</td>
									</tr>     
								<?php endif; ?>    

								<?php if (!empty(get_field('veikla_formatas', $taxonomy))) : ?>        
									<tr>
										<th>Formatas</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_formatas', $taxonomy);  ?>	
										</td>
									</tr>       
								<?php endif; ?>    

								<?php if (!empty(get_field('veikla_nauda', $taxonomy))) : ?>        
									<tr>
										<th>Nauda (ką gaus lankantis pamokas)</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_nauda', $taxonomy);  ?>	
										</td>
									</tr>    
								<?php endif; ?>    

								<?php if (!empty(get_field('veikla_priemones', $taxonomy))) : ?>       
									<tr>
										<th>Kokios priemonės naudojamos?</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_priemones', $taxonomy);  ?>	
										</td>
									</tr>    
								<?php endif; ?>    

								<?php if (!empty(get_field('veikla_tureti', $taxonomy))) : ?>       
									<tr>
										<th>Ką reikia turėti?</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_tureti', $taxonomy);  ?>
										</td>
									</tr>     
								<?php endif; ?>    

								<?php if (!empty(get_field('veikla_uzsiemimu_tvarkarastis', $taxonomy))) : ?>       
									<tr>
										<th>Kada planuojami užsiėmimai?</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_uzsiemimu_tvarkarastis', $taxonomy);  ?>    
										</td>
									</tr>      
								<?php endif; ?>    

								<?php if (!empty(get_field('veikla_kaina', $taxonomy))) : ?>       
									<tr>
										<th>Kaina</th>
										<td colspan="<?php echo $taxonomy->count; ?>">
											<?php the_field('veikla_kaina', $taxonomy);  ?> 
										</td>
									</tr>    
								<?php endif; ?>    
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

?>
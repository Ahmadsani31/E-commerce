@extends('layouts.master')
@section('homepage')
<main class="main-container">
	<!--Checkout Area Start-->
	<section class="checkout-area area-padding ptb-40">
		<!-- Begin checkout -->
		<div class="ld-subpage-content">
			<div class="checkout-content">
				<!-- Begin checkout section -->
				<section class="checkout">
					<section class="checkout-section">
						<div class="ld-checkout-inner">
							<div class="xs-margin"></div>
							<div class="accordion" id="collapse">
								<div class="accordion-group panel darkerbg">
									<div class="container">
										<h2 class="accordion-title">

                                    <span>2. Billing Informations</span>
                                    <a class="accordion-btn open collapse" id="biling" data-toggle="collapse" href="#collapse-two"></a></h2>
										<div class="accordion-body collapse in" id="collapse-two">
											<div class="row accordion-body-wrapper">
												<form action="#">
													<div class="col-sm-6 padding-right-md">
														<h3 class="subtitle">Your Personal Details</h3>
														<div class="xs-margin half"></div>
														<div class="form-group">
															<label for="nama" class="form-label">Enter your name <span class="required">
                                                        </span>
															</label>
															<input type="text" name="nama" id="nama" class="form-control input-lg" value="{{ Auth::guard('costumer')->user()->name }}" readonly>
														</div>
														<div class="form-group">
															<label for="email2" class="form-label">Enter your e-mail <span class="required">
                                                        </span>
															</label>
															<input type="email" name="email2" id="email2" class="form-control input-lg" value="{{ Auth::guard('costumer')->user()->email }}" readonly>
														</div>
														<div class="form-group">
															<label for="telephone" class="form-label">Enter your telephone <span class="required">
                                                        </span>
															</label>
															<input type="text" name="telephone" id="telephone" class="form-control input-lg" value="{{ Auth::guard('costumer')->user()->nope }}" readonly>
														</div>


														<div class="form-group custom-checkbox-wrapper"> <span class="custom-checkbox-container">
                                                    <input type="checkbox" name="newsletter" value="newsletter">

                                                        <span class="custom-checkbox-icon">
                                                                </span>
															</span> <span>I wish to subscribe to the Vigo Shop newsletter.
                                                        </span>
														</div>
														<div class="top-10px"></div>
														<div class="form-group custom-checkbox-wrapper"> <span class="custom-checkbox-container">
                                                    <input type="checkbox" checked="checked" name="same" value="same">

                                                            <span class="custom-checkbox-icon">
                                                                </span>
															</span> <span>My delivery and billing addresses are the same.
                                                            </span>
														</div>
													</div>
													<div class="md-margin visible-xs clearfix"></div>
													<div class="col-sm-6 padding-left-md">
														<h3 class="subtitle">Your Address</h3>
														<div class="xs-margin half"></div>
														<div class="form-group">
															<label for="address1" class="form-label">Enter your address 1</label>
															<input type="text" name="address1" id="address1" class="form-control input-lg">
														</div>
														<div class="form-group">
															<label for="address2" class="form-label">Enter your address 2</label>
															<input type="text" name="address2" id="address2" class="form-control input-lg">
														</div>
														<div class="form-group">
															<label for="city" class="form-label">Enter your city <span class="required">*
                                                                </span>
															</label>
															<input type="text" name="city" id="city" class="form-control input-lg" required>
														</div>
														<div class="form-group">
															<label for="postcode" class="form-label">Enter your post code</label>
															<input type="text" name="postcode" id="postcode" class="form-control input-lg" required>
														</div>
														<div class="form-group">
															<label for="country" class="form-label">Enter your country <span class="required">*
                                                                </span>
															</label>
															<div class="large-selectbox clearfix">
																<select id="country" name="country" class="selectbox">
																	<option value="">Usa</option>
																	<option value="United Kingdom">United Kingdom</option>
																	<option value="Brazil">Brazil</option>
																	<option value="France">France</option>
																	<option value="Italy">Italy</option>
																	<option value="Spain">Spain</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="region" class="form-label">Enter your region/state <span class="required">*
                                                                </span>
															</label>
															<div class="large-selectbox clearfix">
																<select id="region" name="region" class="selectbox">
																	<option value="California">California</option>
																	<option value="New York">New York</option>
																</select>
															</div>
														</div>
														<div class="top-5px"></div>
														<div class="form-group custom-checkbox-wrapper"> <span class="custom-checkbox-container">
                                                            <input type="checkbox" name="privacy" value="privacy">

                                                        <span class="custom-checkbox-icon">
                                                                        </span>
															</span> <span>I have reed and agree to the Privacy Policy.
                                                            </span>
														</div>
														<div class="xs-margin"></div>
														<input type="submit" class="btn btn-custom btn-lg min-width-md" value="Continue">
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-group panel">
									<div class="container">
										<h2 class="accordion-title mb-0">

                    <span>5. Confirm Order
                    </span> <a class="accordion-btn open" data-toggle="collapse" href="#collapse-five"></a></h2>
										<div class="accordion-body collapse in" id="collapse-five">
											<div class="row accordion-body-wrapper">
												<div class="col-md-12">
													<table class="table checkout-table">
														<thead>
															<tr>
																<th class="table-title">Product Name</th>
																<th class="table-title">Product Code</th>
																<th class="table-title">Unit Price</th>
																<th class="table-title">Quantity</th>
																<th class="table-title">SubTotal</th>
																<th> <span class="close-button disabled">
                                                                </span>
																</th>
															</tr>
														</thead>
														<tbody>
                                                            @php
                                                                $total = 0;
                                                            @endphp
                                                           @foreach ($cart as $item)

															<tr>
																<td class="product-name-col">
																	<figure>
																		<a href="#">

																			<img src="{{ asset('images/product/'.$item->product->productImage->pluck('image')[0]) }}" alt="White linen sheer dress">
																		</a>
																	</figure>
																	<h3 class="product-name"><a href="#">{{ $item->product->product_nama }}</a></h3>
																	<ul>
																		<li>Color: {{ $item->product->warna }}</li>
																		<li>Size: {{ $item->ukuran->size }}</li>
																	</ul>
																</td>
																<td class="product-code">{{ $item->product->kode_product }}</td>
																<td class="product-price-col"> <span class="product-price-special">${{ $item->productDetail->harga }}
                                                                    </span>
																</td>
																<td>
																	<div class="custom-quantity-input">
																		<input type="text" name="quantity" value="{{ $item->qty }}">
																	</div>
																</td>
																<td class="product-total-col"> <span class="product-price-special">Rp.{{ number_format($item->productDetail->harga,2) }}
                                                                    </span>
                                                                    @php
                                                                    $total += $item->productDetail->harga;
                                                                    @endphp
																</td>
																<td>
																	<a href="#" class="close-button"></a>
																</td>
															</tr>
                                                            @endforeach
                                                            @if ($total == 0)
                                                                <tr>
                                                                    <td colspan="6"> <span class="bg-info">Ups, Keranjang kosong!</span> </td>
                                                                </tr>
                                                            </table>
                                                            <div class="md-margin half"></div>
                                                            <div class="text-right"><a href="{{ route('home-costumer') }}" class="btn btn-custom-6 btn-lger min-width-slg">Continue Shopping</a>
                                                            </div>
                                                            @else

															<tr class="merged">
																<td class="checkout-table-title" colspan="4"> <span>Subtotal:
                                                                </span>
																</td>
																<td class="checkout-table-price" colspan="2">Rp.{{ number_format($total,2) }}</td>
															</tr>
															<tr class="merged">
																<td class="checkout-table-title" colspan="4"> <span>Shipping:
                                                                </span>
																</td>
																<td class="checkout-table-price" colspan="2">$6.00</td>
															</tr>
															<tr class="merged">
																<td class="checkout-table-title" colspan="4"> <span>Diskon(5%):
                                                                </span>
																</td>
																<td class="checkout-table-price" colspan="2">$37.00</td>
															</tr>
														</tbody>
														<tfoot>
															<tr>
																<td class="checkout-total-title" colspan="4"> <span>TOTAL:
                                                                </span>
																</td>
																<td class="checkout-total-price cart-total" colspan="2">Rp.{{ number_format($total,2) }}</td>
															</tr>
														</tfoot>
													</table>
													<div class="md-margin half"></div>
													<div class="text-right"><a href="#" class="btn btn-custom-6 btn-lger min-width-slg">CONFIRM ORDER</a>
													</div>
                                                    @endif

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="xlg-margin"></div>
						</div>
					</section>
				</section>
				<!-- End checkout section -->
			</div>
			<!-- /.checkout-content -->
		</div>
		<!-- /.ld-subpage-content -->
		<!-- End checkout -->
	</section>
	<!--End of Checkout Area-->
</main>
<!-- All Script -->

<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
@if ($total == 0))
<script>
    $(document).ready(function(){
        $('#collapse-two').removeClass('in');
    });
</script>

@endif
@endsection

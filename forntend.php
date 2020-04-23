<?php
//shortcode

function maxima_tab_shortcode( $atts ) {
    if( !class_exists( 'Vc_Manager' ) ) {
        return;
    }
    extract( shortcode_atts( array(
        'values' => '',        
    ), $atts ) );

    $values = vc_param_group_parse_atts( $atts['values'] );
   
    // All Tab Icon Text 
    $label0 = isset( $values[0]['icon_text'] ) ? $values[0]['icon_text'] : __(' Financial <br> Consolidation','taddon');
    $label1 = isset( $values[1]['icon_text'] ) ? $values[1]['icon_text'] : __('Budget & <br> Forecast','taddon');
    $label2 = isset( $values[2]['icon_text'] ) ? $values[2]['icon_text'] : __(' Reports & <br> Dashboards','taddon');
    $label3 = isset( $values[3]['icon_text'] ) ? $values[3]['icon_text'] : __('Client <br> Analytics','taddon');
    $label4 = isset( $values[4]['icon_text'] ) ? $values[4]['icon_text'] : __('Advisory <br>Services','taddon');
    $label5 = isset( $values[5]['icon_text'] ) ? $values[5]['icon_text'] : __('Certified <br> Training','taddon');
    $label6 = isset( $values[6]['icon_text'] ) ? $values[6]['icon_text'] : __('Monitoring<br> & Alerts','taddon');
    $label7 = isset( $values[7]['icon_text'] ) ? $values[7]['icon_text'] : __('PPP Loan <br>Forgiveness','taddon');
    // All icon Image 
    $icon_id0 = isset( $values[0]['icon_image'] ) ? $values[0]['icon_image'] :'';
        $src0 = wp_get_attachment_image_src($icon_id0,'full');
    $icon_id1 = isset( $values[1]['icon_image'] ) ? $values[1]['icon_image'] :'';
        $src1 = wp_get_attachment_image_src($icon_id1,'full');
    $icon_id2 = isset( $values[2]['icon_image'] ) ? $values[2]['icon_image'] :'';
        $src2 = wp_get_attachment_image_src($icon_id2,'full');
    $icon_id3 = isset( $values[3]['icon_image'] ) ? $values[3]['icon_image'] :'';
        $src3 = wp_get_attachment_image_src($icon_id3,'full');
    $icon_id4 = isset( $values[4]['icon_image'] ) ? $values[4]['icon_image'] :'';
        $src4 = wp_get_attachment_image_src($icon_id4,'full');
    $icon_id5 = isset( $values[5]['icon_image'] ) ? $values[5]['icon_image'] :'';
        $src5 = wp_get_attachment_image_src($icon_id5,'full');
    $icon_id6 = isset( $values[6]['icon_image'] ) ? $values[6]['icon_image'] :'';
        $src6 = wp_get_attachment_image_src($icon_id6,'full');
    $icon_id7 = isset( $values[7]['icon_image'] ) ? $values[7]['icon_image'] :'';
        $src7 = wp_get_attachment_image_src($icon_id7,'full');

    // ALl hover Icon Image 
    $icon_h_id0 = isset( $values[0]['hover_image'] ) ? $values[0]['hover_image'] :'';
        $src_h_0 = wp_get_attachment_image_src($icon_h_id0,'full');
    $icon_h_id1 = isset( $values[1]['hover_image'] ) ? $values[1]['hover_image'] :'';
        $src_h_1 = wp_get_attachment_image_src($icon_h_id1,'full');

    $icon_h_id2 = isset( $values[2]['hover_image'] ) ? $values[2]['hover_image'] :'';
        $src_h_2 = wp_get_attachment_image_src($icon_h_id2,'full');

    $icon_h_id3 = isset( $values[3]['hover_image'] ) ? $values[3]['hover_image'] :'';
        $src_h_3 = wp_get_attachment_image_src($icon_h_id3,'full');

    $icon_h_id4 = isset( $values[4]['hover_image'] ) ? $values[4]['hover_image'] :'';
        $src_h_4 = wp_get_attachment_image_src($icon_h_id4,'full');

    $icon_h_id5 = isset( $values[5]['hover_image'] ) ? $values[5]['hover_image'] :'';
        $src_h_5 = wp_get_attachment_image_src($icon_h_id5,'full');

    $icon_h_id6 = isset( $values[6]['hover_image'] ) ? $values[6]['hover_image'] :'';
        $src_h_6 = wp_get_attachment_image_src($icon_h_id6,'full');

    $icon_h_id7 = isset( $values[7]['hover_image'] ) ? $values[7]['hover_image'] :'';
        $src_h_7 = wp_get_attachment_image_src($icon_h_id7,'full');

    // All Service image 
        // ALl hover Icon Image 
    $service_id0 = isset( $values[0]['servcic_image'] ) ? $values[0]['servcic_image'] :'';
        $service_src_0 = wp_get_attachment_image_src($service_id0,'full');

    $service_id1 = isset( $values[1]['servcic_image'] ) ? $values[1]['servcic_image'] :'';
        $service_src_1 = wp_get_attachment_image_src($service_id1,'full');

    $service_id2 = isset( $values[2]['servcic_image'] ) ? $values[2]['servcic_image'] :'';
        $service_src_2 = wp_get_attachment_image_src($service_id2,'full');

    $service_id3 = isset( $values[3]['servcic_image'] ) ? $values[3]['servcic_image'] :'';
        $service_src_3 = wp_get_attachment_image_src($service_id3,'full');

    $service_id4 = isset( $values[4]['servcic_image'] ) ? $values[4]['servcic_image'] :'';
        $service_src_4 = wp_get_attachment_image_src($service_id4,'full');

    $service_id5 = isset( $values[5]['servcic_image'] ) ? $values[5]['servcic_image'] :'';
        $service_src_5 = wp_get_attachment_image_src($service_id5,'full');

    $service_id6 = isset( $values[6]['servcic_image'] ) ? $values[6]['servcic_image'] :'';
        $service_src_6 = wp_get_attachment_image_src($service_id6,'full');

    $service_id7 = isset( $values[7]['servcic_image'] ) ? $values[7]['servcic_image'] :'';
        $service_src_7 = wp_get_attachment_image_src($service_id7,'full');

    // All Servcie Title    
    $servcie_title0 = isset( $values[0]['title'] ) ? $values[0]['title'] : __(' Financial Consolidation','taddon');
    $servcie_title1 = isset( $values[1]['title'] ) ? $values[1]['title'] : __('Budget & Forecast','taddon');
    $servcie_title2 = isset( $values[2]['title'] ) ? $values[2]['title'] : __(' Reports & Dashboards','taddon');
    $servcie_title3 = isset( $values[3]['title'] ) ? $values[3]['title'] : __('Client Analytics','taddon');
    $servcie_title4 = isset( $values[4]['title'] ) ? $values[4]['title'] : __('Advisory Services','taddon');
    $servcie_title5 = isset( $values[5]['title'] ) ? $values[5]['title'] : __('Certified Training','taddon');
    $servcie_title6 = isset( $values[6]['title'] ) ? $values[6]['title'] : __('Monitoring & Alerts','taddon');
    $servcie_title7 = isset( $values[7]['title'] ) ? $values[7]['title'] : __('PPP Loan Forgiveness','taddon');

    // All Servcie Conetent
    $servcie_content0 = isset( $values[0]['content'] ) ? $values[0]['content'] : '';
    $servcie_content1 = isset( $values[1]['content'] ) ? $values[1]['content'] : '';
    $servcie_content2 = isset( $values[2]['content'] ) ? $values[2]['content'] : '';
    $servcie_content3 = isset( $values[3]['content'] ) ? $values[3]['content'] : '';
    $servcie_content4 = isset( $values[4]['content'] ) ? $values[4]['content'] : '';
    $servcie_content5 = isset( $values[5]['content'] ) ? $values[5]['content'] : '';
    $servcie_content6 = isset( $values[6]['content'] ) ? $values[6]['content'] : '';
    $servcie_content7 = isset( $values[7]['content'] ) ? $values[7]['content'] : '';

    // All button Url
    $btn_url0 = isset( $values[0]['url'] ) ? $values[0]['url'] : '';
    $btn_url1 = isset( $values[1]['url'] ) ? $values[1]['url'] : '';
    $btn_url2 = isset( $values[2]['url'] ) ? $values[2]['url'] : '';
    $btn_url3 = isset( $values[3]['url'] ) ? $values[3]['url'] : '';
    $btn_url4 = isset( $values[4]['url'] ) ? $values[4]['url'] : '';
    $btn_url5 = isset( $values[5]['url'] ) ? $values[5]['url'] : '';
    $btn_url6 = isset( $values[6]['url'] ) ? $values[6]['url'] : '';
    $btn_url7 = isset( $values[7]['url'] ) ? $values[7]['url'] : '';


  //  print_r($src_h_1[0]);

        $list = <<<EOD
        <div class="wrapper-tab-section">
        <div class="tabs-all-items">
            <div class="container">
                <nav>
                  <div class="nav nav-tabs nav-justified" id="nav-tab1" role="tablist">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#financial" role="tab" aria-selected="true">
                        <div class="tab-each tab-1">
                            <div class="icon">
                                <img src="{$src0[0]}" alt="">
                                <img src="{$src_h_0[0]}" alt="">
                            </div> <!-- /.icon -->
                            <div class="tab-each-text">
                                {$label0}
                            </div>
                        </div> <!-- /.tab-each -->
                    </a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#budget" role="tab" aria-selected="false">
                        <div class="tab-each tab-2">
                            <div class="icon">
                            	<img src="{$src1[0]}" alt="">
                                <img src="{$src_h_1[0]}" alt="">
                            </div> <!-- /.icon -->
                            <div class="tab-each-text">
                            {$label1}
                            </div>
                        </div> <!-- /.tab-each -->
                    </a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#reports" role="tab" aria-selected="false">
                        <div class="tab-each tab-3">
                            <div class="icon">
                            	<img src="{$src2[0]}" alt="">
                                <img src="{$src_h_2[0]}" alt="">
                            </div> <!-- /.icon -->
                            <div class="tab-each-text">
                            {$label2}
                            </div>
                        </div> <!-- /.tab-each -->
                    </a>
                     <a class="nav-item nav-link" data-toggle="tab" href="#client" role="tab" aria-controls="nav-profile" aria-selected="false">
                        <div class="tab-each tab-4">
                            <div class="icon">
                            	<img src="{$src3[0]}" alt="">
                                <img src="{$src_h_3[0]}" alt="">
                            </div> <!-- /.icon -->
                            <div class="tab-each-text">
                            {$label3}
                            </div>
                        </div> <!-- /.tab-each -->
                    </a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#advisory" role="tab" aria-selected="false">
                        <div class="tab-each tab-5">
                            <div class="icon">
                            	<img src="{$src4[0]}" alt="">
                                <img src="{$src_h_4[0]}" alt="">
                            </div> <!-- /.icon -->
                            <div class="tab-each-text">
                            {$label4}
                            </div>
                        </div> <!-- /.tab-each -->
                    </a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#certified" role="tab" aria-selected="false">
                        <div class="tab-each tab-6">
                            <div class="icon">
                            	<img src="{$src5[0]}" alt="">
                                <img src="{$src_h_5[0]}" alt="">
                            </div> <!-- /.icon -->
                            <div class="tab-each-text">
                            {$label5}
                            </div>
                        </div> <!-- /.tab-each -->
                    </a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#monitoring" role="tab" aria-selected="false">
                        <div class="tab-each tab-7">
                            <div class="icon">
                            	<img src="{$src6[0]}" alt="">
                                <img src="{$src_h_6[0]}" alt="">
                            </div> <!-- /.icon -->
                            <div class="tab-each-text">
                            {$label6}
                            </div>
                        </div> <!-- /.tab-each -->
                    </a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#ppp" role="tab" aria-selected="false">
                        <div class="tab-each tab-8">
                            <div class="icon">
                            	<img src="{$src7[0]}" alt="">
                                <img src="{$src_h_7[0]}" alt="">
                            </div> <!-- /.icon -->
                            <div class="tab-each-text">
                            {$label7}
                            </div>
                        </div> <!-- /.tab-each -->
                    </a>
                  </div>
                </nav>

                
                <div class="tab-content-area">
                    <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="financial" role="tabpanel">
                              <div class="row">
                                  <div class="col-md-5">
                                      <div class="tab-content-item">
                                          <h3>{$servcie_title0}</h3>
                                          <p>{$servcie_content0}</p>
                                           <nav>
                                              <div class="nav nav-tabs nav-tab2" role="tablist">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#financial" role="tab" aria-selected="true"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#budget" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#reports" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#client" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#advisory" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#certified" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#monitoring" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#ppp" role="tab" aria-selected="false"></a>
                                              </div>
                                            </nav>
                                          <div class="tab-btn">
                                              <a href="{$btn_url0}">Learn More</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-7">
                                      <img src="{$service_src_0[0]}" alt="Content Img">
                                  </div>
                              </div>
                          </div> <!-- /.tab-pane -->
                          <div class="tab-pane fade" id="budget" role="tabpanel">
                              <div class="row">
                                  <div class="col-md-5">
                                      <div class="tab-content-item">
                                          <h3>{$servcie_title1}</h3>
                                          <p>{$servcie_content1}</p>
                                           <nav>
                                              <div class="nav nav-tabs nav-tab2" role="tablist">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#financial" role="tab" aria-selected="true"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#budget" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#reports" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#client" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#advisory" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#certified" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#monitoring" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#ppp" role="tab" aria-selected="false"></a>
                                              </div>
                                            </nav>
                                          <div class="tab-btn">
                                              <a href="{$btn_url1}">Learn More</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-7">
                                      <img src="{$service_src_1[0]}" alt="Content Img">
                                  </div>
                              </div>
                          </div> <!-- /.tab-pane -->
                          <div class="tab-pane fade" id="reports" role="tabpanel">
                               <div class="row">
                                  <div class="col-md-5">
                                      <div class="tab-content-item">
                                          <h3>{$servcie_title2}</h3>
                                          <p>{$servcie_content2}</p>
                                           <nav>
                                              <div class="nav nav-tabs nav-tab2" role="tablist">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#financial" role="tab" aria-selected="true"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#budget" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#reports" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#client" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#advisory" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#certified" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#monitoring" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#ppp" role="tab" aria-selected="false"></a>
                                              </div>
                                            </nav>
                                          <div class="tab-btn">
                                              <a href="{$btn_url2}">Learn More</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-7">
                                      <img src="{$service_src_2[0]}" alt="Content Img">
                                  </div>
                              </div>
                          </div> <!-- /.tab-pane -->
                          <div class="tab-pane fade" id="client" role="tabpanel">
                               <div class="row">
                                  <div class="col-md-5">
                                      <div class="tab-content-item">
                                          <h3>{$servcie_title3}</h3>
                                          <p>{$servcie_content3}</p>
                                           <nav>
                                              <div class="nav nav-tabs nav-tab2" role="tablist">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#financial" role="tab" aria-selected="true"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#budget" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#reports" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#client" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#advisory" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#certified" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#monitoring" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#ppp" role="tab" aria-selected="false"></a>
                                              </div>
                                            </nav>
                                          <div class="tab-btn">
                                              <a href="{$btn_url3}">Learn More</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-7">
                                      <img src="{$service_src_3[0]}" alt="Content Img">
                                  </div>
                              </div>
                          </div> <!-- /.tab-pane -->
                          <div class="tab-pane fade" id="advisory" role="tabpanel">
                               <div class="row">
                                  <div class="col-md-5">
                                      <div class="tab-content-item">
                                          <h3>{$servcie_title4}</h3>
                                          <p>{$servcie_content4}</p>
                                             <nav>
                                              <div class="nav nav-tabs nav-tab2" role="tablist">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#financial" role="tab" aria-selected="true"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#budget" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#reports" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#client" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#advisory" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#certified" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#monitoring" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#ppp" role="tab" aria-selected="false"></a>
                                              </div>
                                            </nav>
                                          <div class="tab-btn">
                                              <a href="{$btn_url4}">Learn More</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-7">
                                      <img src="{$service_src_4[0]}" alt="Content Img">
                                  </div>
                              </div>
                          </div> <!-- /.tab-pane -->
                          <div class="tab-pane fade" id="certified" role="tabpanel">
                               <div class="row">
                                  <div class="col-md-5">
                                      <div class="tab-content-item">
                                          <h3>{$servcie_title5}</h3>
                                          <p>{$servcie_content5}</p>
                                           <nav>
                                              <div class="nav nav-tabs nav-tab2" role="tablist">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#financial" role="tab" aria-selected="true"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#budget" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#reports" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#client" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#advisory" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#certified" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#monitoring" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#ppp" role="tab" aria-selected="false"></a>
                                              </div>
                                            </nav>
                                          <div class="tab-btn">
                                              <a href="{$btn_url5}">Learn More</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-7">
                                      <img src="{$service_src_5[0]}" alt="Content Img">
                                  </div>
                              </div>
                          </div> <!-- /.tab-pane -->
                          <div class="tab-pane fade" id="monitoring" role="tabpanel">
                               <div class="row">
                                  <div class="col-md-5">
                                      <div class="tab-content-item">
                                          <h3>{$servcie_title6}</h3>
                                          <p>{$servcie_content6}</p>
                                            <nav>
                                              <div class="nav nav-tabs nav-tab2" role="tablist">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#financial" role="tab" aria-selected="true"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#budget" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#reports" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#client" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#advisory" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#certified" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#monitoring" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#ppp" role="tab" aria-selected="false"></a>
                                              </div>
                                            </nav>
                                          <div class="tab-btn">
                                              <a href="{$btn_url6}">Learn More</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-7">
                                      <img src="{$service_src_6[0]}" alt="Content Img">
                                  </div>
                              </div>
                          </div> <!-- /.tab-pane -->
                          <div class="tab-pane fade" id="ppp" role="tabpanel">
                               <div class="row">
                                  <div class="col-md-5">
                                      <div class="tab-content-item">
                                          <h3>{$servcie_title7}</h3>
                                          <p>{$servcie_content7}</p>
                                           <nav>
                                              <div class="nav nav-tabs nav-tab2" role="tablist">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#financial" role="tab" aria-selected="true"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#budget" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#reports" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#client" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#advisory" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#certified" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#monitoring" role="tab" aria-selected="false"></a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#ppp" role="tab" aria-selected="false"></a>
                                              </div>
                                            </nav>
                                          <div class="tab-btn">
                                              <a href="{$btn_url7}">Learn More</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-7">
                                      <img src="{$service_src_7[0]}" alt="Content Img">
                                  </div>
                              </div>
                          </div> <!-- /.tab-pane -->
                        
                    </div>
                </div>          
            </div> <!-- /.container -->
        </div> <!-- /.tabs-all-items -->

    </div> <!-- /.wrapper -->
EOD;
    return $list;
    wp_reset_query();

}
add_shortcode( 'maxima_tab', 'maxima_tab_shortcode' );

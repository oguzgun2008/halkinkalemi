@extends('layouts.admin')

@section('description', 'Halkın Kalemi Admin')
@section('title', 'Halkın Kalemi Admin')


@section('content')
    <section class="app-content">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="widget p-md clearfix">
                    <div class="pull-left">
                        <h3 class="widget-title">Welcome to Infinity</h3>
                        <small class="text-color">Number of views</small>
                    </div>
                    <span class="pull-right fz-lg fw-500 counter" data-plugin="counterUp">102</span>
                </div><!-- .widget -->
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="widget p-md clearfix">
                    <div class="pull-left">
                        <h3 class="widget-title">Active</h3>
                        <small class="text-color">Loads / contact</small>
                    </div>
                    <span class="pull-right fz-lg fw-500 counter" data-plugin="counterUp">325</span>
                </div><!-- .widget -->
            </div>
        </div><!-- .row -->

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp">66.136</span>k</h3>
                            <small class="text-color">Total loads</small>
                        </div>
                        <span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
                    </div>
                    <footer class="widget-footer bg-primary">
                        <small>% charge</small>
                        <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
                    </footer>
                </div><!-- .widget -->
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp">3.490</span>k</h3>
                            <small class="text-color">Total Pending</small>
                        </div>
                        <span class="pull-right big-icon watermark"><i class="fa fa-ban"></i></span>
                    </div>
                    <footer class="widget-footer bg-danger">
                        <small>% charge</small>
                        <span class="small-chart pull-right" data-plugin="sparkline" data-options="[1,2,3,5,4], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
                    </footer>
                </div><!-- .widget -->
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-success"><span class="counter" data-plugin="counterUp">8.378</span>k</h3>
                            <small class="text-color">Case Close</small>
                        </div>
                        <span class="pull-right big-icon watermark"><i class="fa fa-unlock-alt"></i></span>
                    </div>
                    <footer class="widget-footer bg-success">
                        <small>% charge</small>
                        <span class="small-chart pull-right" data-plugin="sparkline" data-options="[2,4,3,4,3], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
                    </footer>
                </div><!-- .widget -->
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp">3.490</span>k</h3>
                            <small class="text-color">Total Pending</small>
                        </div>
                        <span class="pull-right big-icon watermark"><i class="fa fa-file-text-o"></i></span>
                    </div>
                    <footer class="widget-footer bg-warning">
                        <small>% charge</small>
                        <span class="small-chart pull-right" data-plugin="sparkline" data-options="[5,4,3,5,2],{ type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
                    </footer>
                </div><!-- .widget -->
            </div>
        </div><!-- .row -->

        <div class="row">
            <div class="col-md-12">
                <div class="widget row no-gutter p-lg">
                    <div class="col-md-5 col-sm-5">
                        <div>
                            <h3 class="widget-title fz-lg text-primary m-b-lg">Sales in 2014</h3>
                            <p class="m-b-lg">Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits</p>
                            <p class="fs-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic eum alias est vitae, obcaecati?</p>
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-7">
                        <div>
                            <div id="lineChart" data-plugin="plot" data-options="
								[
									{
										data: [[1,3.6],[2,3.5],[3,6],[4,4],[5,4.3],[6,3.5],[7,3.6]],
										color: '#ffa000',
										lines: { show: true, lineWidth: 6 },
										curvedLines: { apply: true }
									},
									{
										data: [[1,3.6],[2,3.5],[3,6],[4,4],[5,4.3],[6,3.5],[7,3.6]],
										color: '#ffa000',
										points: {show: true}
									}
								],
								{
									series: {
										curvedLines: { active: true }
									},
									xaxis: {
										show: true,
										font: { size: 12, lineHeight: 10, style: 'normal', weight: '100',family: 'lato', variant: 'small-caps', color: '#a2a0a0' }
									},
									yaxis: {
										show: true,
										font: { size: 12, lineHeight: 10, style: 'normal', weight: '100',family: 'lato', variant: 'small-caps', color: '#a2a0a0' }
									},
									grid: { color: '#a2a0a0', hoverable: true, margin: 8, labelMargin: 8, borderWidth: 0, backgroundColor: '#fff' },
									tooltip: true,
									tooltipOpts: { content: 'X: %x.0, Y: %y.2',  defaultTheme: false, shifts: { x: 0, y: -40 } },
									legend: { show: false }
								}" style="width: 100%; height: 230px;">
                            </div>
                        </div>
                    </div>
                </div><!-- .widget -->
            </div>
        </div><!-- .row -->

    </section><!-- #dash-content -->

@endsection

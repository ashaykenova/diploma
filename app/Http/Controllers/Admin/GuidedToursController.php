<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GuidedTour\BulkDestroyGuidedTour;
use App\Http\Requests\Admin\GuidedTour\DestroyGuidedTour;
use App\Http\Requests\Admin\GuidedTour\IndexGuidedTour;
use App\Http\Requests\Admin\GuidedTour\StoreGuidedTour;
use App\Http\Requests\Admin\GuidedTour\UpdateGuidedTour;
use App\Models\GuidedTour;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class GuidedToursController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexGuidedTour $request
     * @return array|Factory|View
     */
    public function index(IndexGuidedTour $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(GuidedTour::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'announce'],

            // set columns to searchIn
            ['id', 'name', 'announce', 'description']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.guided-tour.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.guided-tour.create');

        return view('admin.guided-tour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGuidedTour $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreGuidedTour $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the GuidedTour
        $guidedTour = GuidedTour::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/guided-tours'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/guided-tours');
    }

    /**
     * Display the specified resource.
     *
     * @param GuidedTour $guidedTour
     * @throws AuthorizationException
     * @return void
     */
    public function show(GuidedTour $guidedTour)
    {
        $this->authorize('admin.guided-tour.show', $guidedTour);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param GuidedTour $guidedTour
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(GuidedTour $guidedTour)
    {
        $this->authorize('admin.guided-tour.edit', $guidedTour);


        return view('admin.guided-tour.edit', [
            'guidedTour' => $guidedTour,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateGuidedTour $request
     * @param GuidedTour $guidedTour
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateGuidedTour $request, GuidedTour $guidedTour)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values GuidedTour
        $guidedTour->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/guided-tours'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/guided-tours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyGuidedTour $request
     * @param GuidedTour $guidedTour
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyGuidedTour $request, GuidedTour $guidedTour)
    {
        $guidedTour->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyGuidedTour $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyGuidedTour $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    GuidedTour::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}

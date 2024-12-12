<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class JobController extends Controller
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $jobs = Job::with('employer')->latest()->paginate(5);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('jobs.create');

    }

    public function show(Job $job): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('jobs.show', ['job' => $job]);

    }

    public function store(): Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        return redirect('jobs');

    }

    public function edit(Job $job): Factory|Application|View|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job): Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        return redirect('/jobs/' . $job->id);

    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');

    }
}

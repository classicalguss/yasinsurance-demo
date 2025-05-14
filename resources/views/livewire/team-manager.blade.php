<div class="space-y-4">
    <form wire:submit.prevent="createTeam" class="flex gap-2">
            <flux:input wire:model="name" required type="name" label="Name" />
            <flux:input wire:model="email" required type="email" label="Email" />
            <flux:input wire:model="nationality_id" required label="Nationality ID" />
            <div>
                <p>&nbsp;</p>
                <flux:button type=submit>
                    Add
                </flux:button>
            </div>
    </form>
    <table class="border-collapse table-auto w-full text-sm">
        <thead>
            <tr>
                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Name</th>
                <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Email</th>
                <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Nationality ID</th>
                <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Insurance</th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-slate-800">
            <?php foreach ($this->users as $user): ?>
            <tr>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $user->name }}</td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $user->email }}</td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $user->nationality_id }}</td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400"></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
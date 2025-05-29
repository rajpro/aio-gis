<x-app-layout>
    <div class="page-container">

        <div class="row">
            <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                            <h4 class="header-title">Lodha PVTG Household Survey Form – Mayurbhanj District </h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <!-- First Block -->
                                    <div class="col-md-3 mb-3">
                                        <label for="gp-name" class="form-label">GP Name</label>
                                        <input type="text" id="gp-name" name="gp_name" class="form-control" placeholder="GP Name">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="village" class="form-label">Village</label>
                                        <input type="text" id="village" name="village" class="form-control" placeholder="Village">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="survey-date" class="form-label">Survey Date</label>
                                        <input type="date" id="survey-date" name="survey_date" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="last-update" class="form-label">Last Version Update</label>
                                        <input type="date" id="last-update" name="last_update" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="surveyor-name" class="form-label">Surveyor Name</label>
                                        <input type="text" id="surveyor-name" name="surveyor_name" class="form-control" placeholder="Surveyor Name">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="surveyor-team" class="form-label">Surveyor Team</label>
                                        <input type="text" id="surveyor-team" name="surveyor_team" class="form-control" placeholder="Surveyor Team">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="hh-name" class="form-label">Household Head Name</label>
                                        <input type="text" id="hh-name" name="household_head_name" class="form-control" placeholder="Household Head Name">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="mobile" class="form-label">Mobile Number</label>
                                        <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select id="gender" name="gender" class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="number" id="age" name="age" class="form-control" placeholder="Age">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="family-members" class="form-label">Total Family Members</label>
                                        <input type="number" id="family-members" name="family_members" class="form-control" placeholder="Total Family Members">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="males" class="form-label">Males</label>
                                        <input type="number" id="males" name="males" class="form-control" placeholder="Males">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="females" class="form-label">Females</label>
                                        <input type="number" id="females" name="females" class="form-control" placeholder="Females">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="children" class="form-label">Children</label>
                                        <input type="number" id="children" name="children" class="form-control" placeholder="Children">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="literacy" class="form-label">Literacy Level</label>
                                        <input type="text" id="literacy" name="literacy" class="form-control" placeholder="Literacy Level">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="occupation" class="form-label">Primary Occupation</label>
                                        <input type="text" id="occupation" name="occupation" class="form-control" placeholder="Primary Occupation">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="forest-produce" class="form-label">Forest Produce</label>
                                        <input type="text" id="forest-produce" name="forest_produce" class="form-control" placeholder="Forest Produce">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="harvest-qty-day" class="form-label">Forest Harvest Qty (kg/day)</label>
                                        <input type="number" id="harvest-qty-day" name="forest_qty_day" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="harvest-qty-week" class="form-label">Forest Harvest Qty (kg/week)</label>
                                        <input type="number" id="harvest-qty-week" name="forest_qty_week" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="harvest-ton" class="form-label">Forest Harvest (in T) </label>
                                        <input type="number" id="harvest-ton" name="forest_qty_ton" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="income-forest" class="form-label">Income from Forest Harvest (/day)</label>
                                        <input type="number" id="income-forest" name="forest_income_day" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="monthly-income" class="form-label">Monthly Income</label>
                                        <input type="number" id="monthly-income" name="monthly_income" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="gross-revenue" class="form-label">Gross Revenue </label>
                                        <input type="number" id="gross-revenue" name="gross_revenue" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="avg-pci" class="form-label">Avg. PCI </label>
                                        <input type="number" id="avg-pci" name="avg_pci" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="seasonal-variation" class="form-label">Seasonal Variation? (Y/N)</label>
                                        <select id="seasonal-variation" name="seasonal_variation" class="form-control">
                                            <option>Y</option>
                                            <option>N</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="peak-month" class="form-label">Peak Month</label>
                                        <input type="text" id="peak-month" name="peak_month" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="gov-investment" class="form-label">Govt Investment (LABHA) </label>
                                        <input type="number" id="gov-investment" name="gov_investment" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="land-ownership" class="form-label">Land Ownership</label>
                                        <input type="text" id="land-ownership" name="land_ownership" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="land-use" class="form-label">Land Use</label>
                                        <input type="text" id="land-use" name="land_use" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="support" class="form-label">Support Received</label>
                                        <input type="text" id="support" name="support_received" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="debt" class="form-label">Debt</label>
                                        <input type="text" id="debt" name="debt" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="debt-source" class="form-label">Debt Source</label>
                                        <input type="text" id="debt-source" name="debt_source" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="debt-amount" class="form-label">Debt Amount</label>
                                        <input type="number" id="debt-amount" name="debt_amount" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="debt-reason" class="form-label">Debt Reason</label>
                                        <input type="text" id="debt-reason" name="debt_reason" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="crime" class="form-label">Crime Reported</label>
                                        <input type="text" id="crime" name="crime_reported" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="crime-type" class="form-label">Crime Type</label>
                                        <input type="text" id="crime-type" name="crime_type" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="reported-police" class="form-label">Reported to Police? (Y/N)</label>
                                        <select id="reported-police" name="reported_police" class="form-control">
                                            <option>Y</option>
                                            <option>N</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="police-action" class="form-label">Police Action</label>
                                        <input type="text" id="police-action" name="police_action" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="jail-status" class="form-label">Jail Status</label>
                                        <input type="text" id="jail-status" name="jail_status" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="jail-relation" class="form-label">Jail Relation</label>
                                        <input type="text" id="jail-relation" name="jail_relation" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="jail-case" class="form-label">Jail Case</label>
                                        <input type="text" id="jail-case" name="jail_case" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="jail-duration" class="form-label">Jail Duration</label>
                                        <input type="text" id="jail-duration" name="jail_duration" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="feel-safe" class="form-label">Feel Safe</label>
                                        <input type="text" id="feel-safe" name="feel_safe" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="police-presence" class="form-label">Police Presence</label>
                                        <input type="text" id="police-presence" name="police_presence" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="vulnerability-flags" class="form-label">Vulnerability Flags</label>
                                        <input type="text" id="vulnerability-flags" name="vulnerability_flags" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="admin-control" class="form-label">Admin Control Details</label>
                                        <input type="text" id="admin-control" name="admin_control" class="form-control" placeholder="Call for emergency">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>